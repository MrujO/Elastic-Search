<?php

namespace App\Console\Commands;

use App\Place;
use Elasticsearch\Client;
use Illuminate\Console\Command;

class ReindexCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:reindex';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Indexes all places to Elasticsearch';

    /** @var \Elasticsearch\Client */
    private $elasticsearch;

    public function __construct(Client $elasticsearch)
    {
        parent::__construct();

        $this->elasticsearch = $elasticsearch;
    }

    public function handle()
    {
        $this->info('Indexing all places. This might take a while...');

        $this->elasticsearch->indices()->delete(['index' => 'places']);

        $params = [
            'index' => 'places',
            'body' => [
                'settings' => [
                    'analysis' => [
                        'analyzer' => [
                            'autocomplete' => [
                                'tokenizer' => 'autocomplete',
                                'filter' => ['lowercase', 'asciifolding']
                            ],

                            'autocomplete_search' => [
                                'tokenizer' => 'lowercase',
                            ]
                        ],

                        'tokenizer' => [
                            'autocomplete' => [
                                'type' => 'edge_ngram',
                                'min_gram' => 3,
                                'max_gram' => 4,
                                'token_chars' => ['letter']
                            ]
                        ]
                    ]
                ],
                'mappings' => [
                    'properties' => [
                        'id' => [
                            'type' => 'text',
                            'index' => 'false'
                        ],
                        'key' => [
                            'type' => 'text',
                            'index' => 'false'
                        ],
                        'uf' => [
                            'type' => 'text',
                            'analyzer' => 'autocomplete',
                            'search_analyzer' => 'autocomplete_search'
                        ],
                        'cidade' => [
                            'type' => 'text',
                            'analyzer' => 'autocomplete',
                            'search_analyzer' => 'autocomplete_search'
                        ],
                        'bairro' => [
                            'type' => 'text',
                            'analyzer' => 'autocomplete',
                            'search_analyzer' => 'autocomplete_search'
                        ]
                    ]
                ]
            ]
        ];

        $this->elasticsearch->indices()->create($params);

        foreach (Place::cursor() as $place)
        {
            $this->elasticsearch->index([
                'index' => $place->getSearchIndex(),
                'id' => $place->getKey(),
                'body' => $place->toSearchArray(),
            ]);

            // PHPUnit-style feedback
            $this->output->write('.');
        }

        $this->info("\nDone!");
    }
}

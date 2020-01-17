<?php

namespace App\Providers;

use App\Places;
use App\Articles;
use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Articles\ArticlesRepository::class, function () {
            return new Articles\ElasticsearchRepository(
                $this->app->make(Client::class)
            );
        });

        $this->app->bind(Places\PlacesRepository::class, function () {
            return new Places\ElasticsearchRepository(
                $this->app->make(Client::class)
            );
        });

        $this->bindSearchClient();
    }

    private function bindSearchClient()
    {
        $this->app->bind(Client::class, function ($app) {
            return ClientBuilder::create()
                ->setHosts($this->app['config']->get('services.search.hosts'))
                ->build();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places[] = array(

            array( "key" => "ac", "uf" => "Acre", "cidade" => "", "bairro" => ""),
            array( "key" => "al", "uf" => "Alagoas", "cidade" => "", "bairro" => ""),
            array( "key" => "ap", "uf" => "Amapá", "cidade" => "", "bairro" => ""),
            array( "key" => "am", "uf" => "Amazonas", "cidade" => "", "bairro" => ""),
            array( "key" => "ba", "uf" => "Bahia", "cidade" => "", "bairro" => ""),
            array( "key" => "ce", "uf" => "Ceará", "cidade" => "", "bairro" => ""),
            array( "key" => "df", "uf" => "Distrito Federal", "cidade" => "", "bairro" => ""),
            array( "key" => "es", "uf" => "Espirito Santo", "cidade" => "", "bairro" => ""),
            array( "key" => "go", "uf" => "Goiás", "cidade" => "", "bairro" => ""),
            array( "key" => "ma", "uf" => "Maranhão", "cidade" => "", "bairro" => ""),
            array( "key" => "mt", "uf" => "Mato Grosso", "cidade" => "", "bairro" => ""),
            array( "key" => "ms", "uf" => "Mato Grosso do Sul", "cidade" => "", "bairro" => ""),
            array( "key" => "mg", "uf" => "Minas Gerais", "cidade" => "", "bairro" => ""),
            array( "key" => "pa", "uf" => "Pará", "cidade" => "", "bairro" => ""),
            array( "key" => "pb", "uf" => "Paraíba", "cidade" => "", "bairro" => ""),
            array( "key" => "pr", "uf" => "Paraná", "cidade" => "", "bairro" => ""),
            array( "key" => "pe", "uf" => "Pernanbuco", "cidade" => "", "bairro" => ""),
            array( "key" => "pi", "uf" => "Piauí", "cidade" => "", "bairro" => ""),
            array( "key" => "rj", "uf" => "Rio de Janeiro", "cidade" => "", "bairro" => ""),
            array( "key" => "rn", "uf" => "Rio Grande do Norte", "cidade" => "", "bairro" => ""),
            array( "key" => "rs", "uf" => "Rio Grande do Sul", "cidade" => "", "bairro" => ""),
            array( "key" => "ro", "uf" => "Rondônia", "cidade" => "", "bairro" => ""),
            array( "key" => "rr", "uf" => "Roraima", "cidade" => "", "bairro" => ""),
            array( "key" => "sc", "uf" => "Santa Catarina", "cidade" => "", "bairro" => ""),
            array( "key" => "sp", "uf" => "São Paulo", "cidade" => "", "bairro" => ""),
            array( "key" => "se", "uf" => "Sergipe", "cidade" => "", "bairro" => ""),
            array( "key" => "to", "uf" => "Tocantins", "cidade" => "", "bairro" => ""),

			array( "key" => "atibaia+sp", "cidade" => "Atibaia", "uf" => "São Paulo","bairro" => ""),
			array( "key" => "brodowski+sp", "cidade" => "Brodowski","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "cristais-paulista+sp", "cidade" => "Cristais Paulista","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "dolcinopolis+sp", "cidade" => "Dolcinópolis","uf" => "São Paulo", "bairro" => "" ),
			array( "key" => "espirito-santo-do-turvo+sp", "cidade" => "Espírito Santo do Turvo","uf" => "São Paulo","bairro" => ""),
			array( "key" => "florida-paulista+sp", "cidade" => "Flórida Paulista","uf" => "São Paulo", "bairro" => "" ),
			array( "key" => "guariba+sp", "cidade" => "Guariba","uf" => "São Paulo","bairro" => ""),
			array( "key" => "herculândia+sp", "cidade" => "Herculândia","uf" => "São Paulo", "bairro" => "" ),
            array( "key" => "ilhabela+sp", "cidade" => "Ilhabela","uf" => "São Paulo","bairro" => ""),
			array( "key" => "jaborandi+sp", "cidade" => "Jaborandi","uf" => "São Paulo","bairro" => ""),
			array( "key" => "lagoinha+sp", "cidade" => "Lagoinha","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "macatuba+sp", "cidade" => "Macatuba","uf" => "São Paulo","bairro" => ""),
			array( "key" => "novais+sp", "cidade" => "Novais","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "ocaucu+sp", "cidade" => "Ocauçu","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "presidente-prudente+sp", "cidade" => "Presidente Prudente","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "quadra+sp", "cidade" => "Quadra","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "rio-grande-da-serra+sp", "cidade" => "Rio Grande da Serra","uf" => "São Paulo","bairro" => ""),
			array( "key" => "sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "" ),
			array( "key" => "tupi-paulista+sp", "cidade" => "Tupi Paulista","uf" => "São Paulo","bairro" => ""),
			array( "key" => "ubarana+sp", "cidade" => "Ubarana","uf" => "São Paulo","bairro" => "" ),
			array( "key" => "vitoria Brasil+sp", "cidade" => "Vitória Brasil","uf" => "São Paulo","bairro" => "" ),
            array( "key" => "zacarias+sp", "cidade" => "Zacarias","uf" => "São Paulo","bairro" => ""),

            array( "key" => "Pinheiros+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Pinheiros" ),
            array( "key" => "santo-amaro+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Santo Amaro" ),
            array( "key" => "vila-mariana+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Vila Mariana" ),
            array( "key" => "morumbi+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Morumbi" ),
            array( "key" => "balneario-sao-jose+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Balneário São José" ),
            array( "key" => "faria-lima+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Faria Lima" ),
            array( "key" => "paulista+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Paulista" ),
            array( "key" => "barra-funda+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Barra Funda" ),
            array( "key" => "campo-belo+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Campo Belo" ),
            array( "key" => "grajau+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Grajaú" ),
            array( "key" => "moema+sao-paulo+sp", "cidade" => "São Paulo","uf" => "São Paulo", "bairro" => "Moema" ),
        );

        foreach ( $places as $place ) {
            \App\Place::insert( $place );
        }
    }
}

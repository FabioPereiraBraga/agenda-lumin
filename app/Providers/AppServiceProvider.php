<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Entities\Pessoa;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        view()->share(['letras'=>  $this->getLetras()]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    public function getLetras()
    {
        $result = Pessoa::all(['Apelido']);


        $letras = [ ];
        foreach ( $result as $resul)
        {
           $letras[ ] = ucfirst ( substr($resul['Apelido'], 0,1) );
        }

        sort($letras);
        return array_unique($letras);
    }
}

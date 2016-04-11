<?php
namespace App\Http\Controllers;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AgendaController
 *
 * @author fabio-braga
 */

use App\Entities\Pessoa;

class AgendaController extends Controller
{

    public function index(  )
    {
       $pessoas = Pessoa::where('Apelido' , 'like', "A%")->get();

       $letras  = $this->consultaLetras();
      return view('agenda', ['pessoas'=>$pessoas, 'letras' => $letras] );
    }

     public function consulta( $like )
    {
         $letras  = $this->consultaLetras();

     $pessoas = Pessoa::where('Apelido' , 'like', "{$like}%")->get();


      return view('agenda', ['pessoas'=>$pessoas,'letras'=>$letras] );
    }

    public function consultaLetras()
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
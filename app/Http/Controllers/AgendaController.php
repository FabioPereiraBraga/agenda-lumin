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
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    public function index(  )
    {
       $pessoas = Pessoa::where('Apelido' , 'like', "A%")->get();

     
      return view('agenda', ['pessoas'=>$pessoas] );
    }

     public function consulta( $like )
    {
        

     $pessoas = Pessoa::where('Apelido' , 'like', "{$like}%")->get();


      return view('agenda', ['pessoas'=>$pessoas] );
    }

   

    public function buscar(Request $request )
    {
       
          $busca = $request->busca;
         
          $pessoas = [ ];
          if(!empty( $busca ) ){
              $pessoas     = Pessoa::where('apelido' , 'like', "%{$busca}%")
                                    ->orWhere('nome' , 'like', "%{$busca}%")
                                    ->get();
          }
         
         return view('agenda', ['pessoas'=>$pessoas] );
    }

}
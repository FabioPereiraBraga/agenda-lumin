<?php
namespace App\Http\Controllers;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PessoaController
 *
 * @author fabio-braga
 */

use App\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends  Controller
{

    public function create()
    {
      return  view('pessoa.create');

    }

    public function store(Request $request )
    {

        $validator =  Validator::make($request->all(),[
            'nome'=>'required|min:3|max:255|unique:pessoas',
            'apelido'=>'required|min:2|max:50',
            'sexo'=>'required'
        ]);

        if($validator->fails()){
            return redirect()->route('pessoa.create')->withErrors($validator)
                   ->withInput();
        }

        $pessoa = Pessoa::create($request->all());
        $letra = strtoupper( substr($pessoa->apelido, 0,1));

        return redirect()->route('agenda-letra',['letra'=>$letra]);
    }

    public  function destroy( $id )
    {
        \App\Entities\Pessoa::destroy($id);

        return redirect()->route('agenda-contados');
    }



      public  function edit( $id )
    {
     
       $pessoa = Pessoa::find($id);
       return view('pessoa.edit',['pessoa'=>$pessoa]) ;
    }


    public  function update(Request $request , $id )
    {

        $validator =  Validator::make($request->all(),[
            'nome'=>'required|min:3|max:255|unique:pessoas',
            'apelido'=>'required|min:2|max:50',
            'sexo'=>'required'
        ]);

        if($validator->fails()){
            return redirect()->route('pessoa.edit')->withErrors($validator)
                   ->withInput();
        }

        $pessoa = Pessoa::find($id);
        $pessoa->nome = $request->nome;
        $pessoa->apelido = $request->apelido;
        $pessoa->sexo    = $request->sexo;
        $pessoa->save();

        $letra = strtoupper( substr($pessoa->apelido, 0,1));

        return redirect()->route('agenda-letra',['letra'=>$letra]);

    }


    public function delete( $id )
    {
        $pessoa = \App\Entities\Pessoa::find($id);

        return view('pessoa.delete',['pessoa'=>$pessoa] );
    }
}
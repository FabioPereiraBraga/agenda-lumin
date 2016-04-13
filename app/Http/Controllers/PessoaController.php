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
class PessoaController extends  Controller
{
    public  function destroy( $id )
    {
        \App\Entities\Pessoa::destroy($id);

        return redirect()->route('agenda-contados');
    }

    public function delete( $id )
    {
        $pessoa = \App\Entities\Pessoa::find($id);

        return view('pessoa.delete',['pessoa'=>$pessoa] );
    }
}
<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TelefoneController
 *
 * @author fabio-braga
 */

use \App\Entities\Telefone;

class TelefoneController extends Controller
{
    public  function destroy( $id )
    {
        
        Telefone::destroy($id);

        return redirect()->route('agenda-contados');
    }


     public  function delete( $id )
    {
        
         
        $telefones = Telefone::find($id);
        $pessoa = $telefones->pessoa;
        return view('telefone.delete',['telefone'=>$telefones,'pessoa'=>$pessoa]);
    }

}
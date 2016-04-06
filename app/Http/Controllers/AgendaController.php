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
class AgendaController extends Controller
{

    public function index()
    {
      return view('agenda');
    }
}
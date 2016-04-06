<?php
namespace App\Entities;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Telefones
 *
 * @author fabio-braga
 */
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
      'descricao',
      'codpais',
      'ddd',
      'prefixo',
      'sufixo'
    ];


    //put your code here
}
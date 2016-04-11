<?php
namespace App\Entities;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author fabio-braga
 */
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }




    //put your code here
}
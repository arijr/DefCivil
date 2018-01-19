<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
    protected $table = 'enderecos';

    protected $fillable = [
      'rua',
      'cep',
      'numero',
      'bairro',
      'cidade',
      'estado',
      'ocorrencia_id'
    ];
}

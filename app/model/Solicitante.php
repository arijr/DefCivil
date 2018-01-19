<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    //
    protected $table = 'solicitantes';

    protected $fillable = [
      'nome',
      'telefone',
      'cpf',
      'nis',
      'identidade',
      'ocorrencia_id'
    ];
}

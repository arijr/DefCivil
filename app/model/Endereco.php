<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Ocorrencia;
use App\model\Solicitante;

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
      'ocorrencia_id',
      'solicitante_id'
    ];

    public function ocorrencia()
    {
      return $this->hasMany(Ocorrencia::class, 'id');
    }

    public function solicitante()
    {
      return $this->hasOne(Solicitante::class, 'id');
    }

}

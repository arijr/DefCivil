<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Endereco;
use App\model\Ocorrencia;

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
      'ocorrencia_id',
      'endereco_id'
    ];

    public function ocorrencia()
    {
      return $this->hasMany(Ocorrencia::class, 'id');
    }

    public function endereco()
    {
      return $this->hasOne(Endereco::class, 'id');
    }
}

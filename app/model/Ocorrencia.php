<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\DataTables;
use App\model\Solicitante;
use App\model\Endereco;

class Ocorrencia extends Model
{
    //
    protected $table = 'ocorrencias';

    protected $fillable = [
      // 'numero', # ID + datetime(year)
      'data',
      'motivo',
      'descricao',
      'tipo',
      'solicitante_id',
      'endereco_id'
    ];

    public function dadosDatatable(){
      $ocorrencias = $this->select([
        'id',
        'created_at',
        'motivo',
        'descricao',
        'tipo'
        ]);

      // return DataTables::of($ocorrencias)->make();
      return $ocorrencias;
    }

    public function solicitante()
    {
      return $this->hasOne(Solicitante::class, 'id');
    }

    public function endereco()
    {
      return $this->hasOne(Endereco::class, 'id');
    }
}

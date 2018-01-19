<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\DataTables;

class Ocorrencia extends Model
{
    //
    protected $table = 'ocorrencias';

    protected $fillable = [
      'numero', # ID + datetime(year)
      'data',
      'motivo',
      'descricao',
      'tipo'
    ];

    public function dadosDatatable(){
      $ocorrencias = $this->select([
        'numero',
        'created_at',
        'motivo',
        'descricao',
        'tipo'
        ]);

      // return DataTables::of($ocorrencias)->make();
      return $ocorrencias;
    }
}

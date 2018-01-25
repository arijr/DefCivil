<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\SolicitanteController;
use App\model\Ocorrencia;
use App\model\Solicitante;
use App\model\Endereco;
use Yajra\DataTables\DataTables;

class OcorrenciaController extends Controller
{

    private $endereco_controller;
    private $solicitante_controller;

    public function __construct(EnderecoController $endereco_controller, SolicitanteController $solicitante_controller)
    {
      $this->endereco_controller = $endereco_controller;
      $this->solicitante_controller = $solicitante_controller;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ocorrencias.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ocorrencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ocorrencia = Ocorrencia::create($request->all());

        $endereco = new Endereco();
        $endereco->rua = $request->rua;
        $endereco->cep = $request->cep;
        $endereco->numero = $request->numero_casa;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->ocorrencia_id = $ocorrencia->id;
        $this->endereco_controller->store($endereco);

        $solicitante = new Solicitante();
        $solicitante->nome = $request->nome;
        $solicitante->telefone = $request->telefone;
        $solicitante->identidade = $request->identidade;
        $solicitante->cpf = $request->cpf;
        $solicitante->nis = $request->nis;
        $solicitante->ocorrencia_id = $ocorrencia->id;
        $this->solicitante_controller->store($solicitante);

        return view( 'ocorrencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dataOco()
    {
      $ocorrencias = new Ocorrencia();
      return DataTables::of($ocorrencias->dadosDatatable())
        ->editColumn('created_at', function($data){
            return $data->created_at->format('d/m/Y');
        })
        // ->editColumn('id', function($numero){
        //   return $numero->id->format('');
        // })
        ->filterColumn('created_at', function ($query, $keyword) {
            $query->whereRaw("DATE_FORMAT(created_at, '%d/%m/%Y') like ?", ["%keyword%"]);
        })
        ->make();
    }
}

@extends('home')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Nova Ocorrência</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <span>Ocorrência Nº: 0043/2018</span>
        <span class="pull-right">Coordenadas: 7°13'18.8"S 35°53'14.3"W </span>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="well col-lg-12">
            <h3>Dados da ocorrência</h3>
            <form role="form" action="{{ url('/ocorrencias/') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group col-lg-3">
                <label>motivo</label>
                <select class="form-control" name="motivo">
                  <option>Queda de arvore</option>
                  <option>Queda de muro</option>
                  <option>Queda de imovel</option>
                  <option>Queda de marquise</option>
                  <option>Vistoria preventiva</option>
                  <option>Alagamento</option>
                  <option>Vistoria de barragem</option>
                  <option>Vistoria pós incêndio</option>
                  <option>Ocupação irregular</option>
                  <option>Imovel Abandonado</option>
                  <option>Vistoria Predial</option>
                  <option>Vistoria em escola</option>
                </select>
              </div>
              <div class="form-group col-lg-3">
                <label>Tipo</label>
                <select class="form-control" name="tipo">
                  <option>Queda de arvore</option>
                  <option>Queda de muro</option>
                  <option>Queda de imovel</option>
                  <option>Queda de marquise</option>
                  <option>Vistoria preventiva</option>
                  <option>Alagamento</option>
                  <option>Vistoria de barragem</option>
                  <option>Vistoria pós incêndio</option>
                  <option>Ocupação irregular</option>
                  <option>Imovel Abandonado</option>
                  <option>Vistoria Predial</option>
                  <option>Vistoria em escola</option>
                </select>
              </div>
              <div class="form-group col-lg-3">
                <label>Logradouro</label>
                <input class="form-control" placeholder="Rua Treze de Maio" name="rua">
              </div>
              <div class="form-group col-lg-1">
                <label>Número</label>
                <input class="form-control" placeholder="123" name="numero">
              </div>
              <div class="form-group col-lg-2">
                <label>CEP</label>
                <input class="form-control" placeholder="12.345-678" name="cep">
              </div>
              <div class="form-group col-lg-6">
                <label>Descrição</label>
                <textarea class="form-control" rows="4" name="descricao"></textarea>
              </div>
              <div class="form-group col-lg-2">
                <label>Bairro</label>
                <input class="form-control" placeholder="Centro" name="bairro">
              </div>
              <div class="form-group col-lg-2">
                <label>Cidade</label>
                <input class="form-control" value="Campina Grande" name="cidade" readonly>
              </div>
              <div class="form-group col-lg-2">
                <label>Estado</label>
                <input class="form-control" value="Paraíba" name="estado" readonly>
              </div>
              <div class="checkbox col-lg-6">
                <label>
                  <input type="checkbox" value=""> O endereço da ocorrência é o mesmo do requerente.
                </label>
              </div>
            </div> <!-- /well -->
            <div class="well col-lg-12">
              <h3>Dados do requerente</h3>
              <div class="form-group col-lg-4">
                <label>Nome</label>
                <input class="form-control" name="nome">
              </div>
              <div class="form-group col-lg-2">
                <label>Telefone</label>
                <input class="form-control" placeholder="(83) 9999-9999" name="telefone">
              </div>
              <div class="form-group col-lg-3">
                <label>Logradouro</label>
                <input class="form-control" placeholder="Rua Treze de Maio" name="rua">
              </div>
              <div class="form-group col-lg-1">
                <label>Número</label>
                <input class="form-control" placeholder="123" name="numero">
              </div>
              <div class="form-group col-lg-2">
                <label>CEP</label>
                <input class="form-control" placeholder="12.345-678" name="cep">
              </div>
              <div class="form-group col-lg-2">
                <label>Identidade</label>
                <input class="form-control" placeholder="11.22-333" name="identidade">
              </div>
              <div class="form-group col-lg-2">
                <label>CPF</label>
                <input class="form-control" placeholder="111.222.333-44" name="cpf">
              </div>
              <div class="form-group col-lg-2">
                <label>NIS</label>
                <input class="form-control" placeholder="123.456.789.01" name="nis">
              </div>
              <div class="form-group col-lg-2">
                <label>Bairro</label>
                <input class="form-control" placeholder="Centro" name="bairro">
              </div>
              <div class="form-group col-lg-2">
                <label>Cidade</label>
                <input class="form-control" value="Campina Grande" disabled>
              </div>
              <div class="form-group col-lg-2">
                <label>Estado</label>
                <input class="form-control" value="Paraíba" disabled>
              </div>
            </div>
            <p class="col-lg-12">
              <button  class="btn btn-primary pull-right">Salvar</button>
            </p>
          </form>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
@endsection

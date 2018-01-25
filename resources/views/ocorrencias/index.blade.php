@extends('home')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Lista de Ocorrências</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <a href="{{route('ocorrencias.create')}}"><button type="button" class="btn btn-default float-right">Criar nova</button></a>
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="ocorrencias-table">
          <thead>
            <tr role="row">
              <th>Numero</th>
              <th>Data</th>
              <th>Motivo</th>
              <th>Tipo</th>
              <th>Descrição</th>
            </tr>
          </thead>
        </table>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-6 -->
  <!-- /.row -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
@endsection

@push('scripts')
<!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->

<script>

  $(function() {
    $('#ocorrencias-table').DataTable({
      processing: false,
      serverSide: true,
      ajax: '{{route('ocorrencia.data')}}',
      columns: [
        {data:'id',name: 'id'},
        {data:'created_at', name: 'created_at'},
        {data:'motivo', name: 'motivo'},
        {data:'tipo', name: 'tipo'},
        {data:'descricao', name: 'descricao'}
        // {data: 'action', name: 'action', orderable: false, searchable: false}
      ]
    });
  });
</script>
@endpush

@extends('template')

@section('title')
Médicos
@endsection

@section('content')

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading clearfix">
        <div class="btn-group pull-left">
          <a href="{{ route('doctors.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Novo</a>
        </div>
        <h4 class="panel-title pull-right" style="padding-top: 7.5px;"></h4>
      </div>
      <!-- Table -->
      <table class="table table-striped table-responsible table-sm" id="table-doctors" style="padding: 10px;">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Telefone</th>
              <th>Ações</th>
            </tr>
          <thead>
      </table>
    </div>

@endsection

@section('scripts')
<script>
    $(function() {
        $('#table-doctors').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('doctors.datatables') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'phone', name: 'phone' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
            language: {
                sEmptyTable: "Nenhum registro encontrado",
                sInfo: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                sInfoEmpty: "Mostrando 0 até 0 de 0 registros",
                sInfoFiltered: "(Filtrados de _MAX_ registros)",
                sInfoPostFix: "",
                sInfoThousands: ".",
                sLengthMenu: "_MENU_ resultados por página",
                sLoadingRecords: "Carregando...",
                sProcessing: "Processando...",
                sZeroRecords: "Nenhum registro encontrado",
                sSearch: "Pesquisar",
                oPaginate: {
                    sNext: "Próximo",
                    sPrevious: "Anterior",
                    sFirst: "Primeiro",
                    sLast: "Último"
                },
                oAria: {
                    sSortAscending: ": Ordenar colunas de forma ascendente",
                    sSortDescending: ": Ordenar colunas de forma descendente"
                }
            }
        });
    });
</script>
@endsection

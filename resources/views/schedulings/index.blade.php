@extends('template')

@section('title')
Agendamentos
@endsection

@section('content')

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading clearfix">
        <div class="btn-group pull-left">
          <a href="{{ route('schedulings.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Novo</a>
        </div>
        <h4 class="panel-title pull-right" style="padding-top: 7.5px;"></h4>
      </div>
      <!-- Table -->
      <table class="table table-striped table-responsible table-sm" id="table-scheduling" style="padding: 10px;">
        <thead>
          <tr>
            <th>Id</th>
            <th>Paciente</th>
            <th>Médico</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Situação</th>
            <th></th>
          </tr>
        </thead>
      </table>
    </div>

@endsection

@section('scripts')
<script>
    $(function() {
        $('#table-scheduling').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('schedulings.datatables') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'patient', name: 'patient.name' },
                { data: 'doctor', name: 'doctor.name' },
                { data: 'date', name: 'date' },
                { data: 'time', name: 'time' },
                { data: 'status', name: 'status' },
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
@extends('template.dashboard.index')

@section('metaTitle', 'Lista de inscritos')

@section('content')
@component('template.dashboard.components.breadcrumbs', ['breadcrumbs'=> [
'Inscritos' => action('Dashboard\EnroledsController@index'),
'Lista de inscritos' => '',
]])
@endcomponent
<!-- Icon Cards -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i>
        Lista de inscritos
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" data-id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>Inscrito</th>
                        <th>Matrícula</th>
                        <th>Valor</th>
                        <th>Pagamento</th>
                        <th>Atividade</th>
                        <th>Presente?</th>
                    </tr>
                    <tr>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                      </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Inscrito</th>
                        <th>Matrícula</th>
                        <th>Valor</th>
                        <th>Pagamento</th>
                        <th>Atividade</th>
                        <th>Presente?</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($enroleds as $enroled)
                    <tr>
                        <td>{{$enroled->user_name}}</td>
                        <td>{{$enroled->fat_register or 'Não tem'}}</td>
                        <td>R$ {{number_format($enroled->value, 2, ',', ' ')}}</td>                      
                        <td>{{$enroled->pagseguro_status_name or 'Não pago'}}</td>
                        <td>{{$enroled->activity_name}}</td>
                        <td>
                          <a href="javascript://" 
                             onclick="is_present({{$enroled->enrol_id}}, this);" 
                             class="btn {{$enroled->enrol_present ? 'btn-danger' : 'btn-primary'}}"
                             id="btn-{{$enroled->enrol_id}}">
                            {{$enroled->enrol_present ? 'Cancelar presença' : 'Confirmar presença'}}
                          </a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-pt_BR.js"></script>

<script src="//cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="//cdn.rawgit.com/ashl1/datatables-rowsgroup/v1.0.0/dataTables.rowsGroup.js"></script>
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script>
    /* global dataTableOpt */
    var tableConfig = {
        //"pageLength": 25,
        aaSorting: [], //Disable initial sort
        language: {
            emptyTable: "Não existem dados disponíveis na tabela",
            info: "Mostrando _START_ até _END_ do total _TOTAL_ ocorrências",
            infoEmpty: "Mostrando 0 de 0 of 0 ocorrências",
            infoFiltered: "(filtrado de _MAX_ total ocorrências)",
            infoPostFix: "",
            thousands: ",",
            lengthMenu: "_MENU_ registro por página",
            loadingRecords: "Carregando...",
            processing: "Processando...",
            search: "Buscar: ",
            zeroRecords: "Nenhuma ocorrência encontrada",
            paginate: {
                first: "Primeiro",
                last: "Último",
                next: "Próximo",
                previous: "Anterior"
            },
            aria: {
                sortAscending: ": activate to sort column ascending",
                sortDescending: ": activate to sort column descending"
            }
        },
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape'
            }
        ],
        columns: [
            {name: 'inscrito', data: 'inscrito'},
            {name: 'matricula', data: 'matricula'},
            {name: 'valor', data: 'valor'},
            {name: 'pagamento', data: 'pagamento'},
            {name: 'atividade', data: 'atividade'},
            {name: 'presente', data: 'presente'},
        ],
        rowsGroup: [
            'inscrito:name',
            'matricula:name',
            'valor:name',
            'pagamento:name',
        ],
        initComplete: function () {
            this.api().columns([2, 3, 4]).every(function () {
                var column = this;
                var select = $('<select data-multiple data-class="selectpicker" class="form-control" data-width="100px" data-size="10" title="Selecione os filtros" data-live-search="true" data-actions-box="true" style="display:block;margin-right:10px;"><option selected value="">Nenhum</option</select>')
                        //.appendTo($(column.footer()).empty())
                        .appendTo($(column.header()))
                        .on('change', function () {
                            var value = $(this).val();
                            if (typeof value === 'string') {
                                var val = $.fn.dataTable.util.escapeRegex(value);
                                column.search(val && val.length > 0 ? '^' + val + '$' : '', true, false).draw();
                            } else if (typeof value === 'object') {
                                column.search(value !== null ? '^' + value.join('|') + '$' : '', true, false).draw();
                            }

                        });

                column.data().unique().sort().each(function (d, j) {
                    var e = d;
                    var replaceStrings = [
                        {from: '  ', to: ''},
                    ].forEach(function (item, index, arr) {
                        e = e.replace(new RegExp(item.from, 'g'), item.to);
                    });
                    select.append('<option value="' + d + '">' + e + '</option>')
                });
            });
        },
    };
    var table = $('table').DataTable(tableConfig);
    $('div.dt-buttons').addClass('btn-group');
    $('a.dt-button').addClass('btn btn-secondary');
</script>

<link href="//cdn.jsdelivr.net/jquery.loading/1.2.0/jquery.loading.min.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/jquery.loading/1.2.0/jquery.loading.min.js"></script>
<script>
  function is_present(activity, el){
    $(el).loading();
        var url = '{!!action('Dashboard\EnroledsController@update')!!}';
        var config = {
            url: url,
            method: 'GET',
            data: {id: activity},
            dataType: "script",
            statusCode: {
                500: function () {
                    $(el).loading('stop');
                    alert("ERROR 500 no servidor");
                }
            }
        };
        $.ajax(config);
  }
</script>
@endpush
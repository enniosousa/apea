@extends('template.dashboard.index')

@section('metaTitle', 'Lista de inscritos')

@section('content')
@component('template.dashboard.components.breadcrumbs', ['breadcrumbs'=> [
'Inscritos' => action('Dashboard\EnroledsController@index'),
'Lista de inscritos' => '',
]])
@endcomponent
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
						<th>Certificado</th>
					</tr>
					<tr>
						<th></th>
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
						<th>Certificado</th>
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
								class="btn btn-sm {{$enroled->enrol_present ? 'btn-danger' : 'btn-primary'}}"
								id="btn-{{$enroled->enrol_id}}">
							{{$enroled->enrol_present ? 'Cancelar presença' : 'Confirmar presença'}}
							</a>
						</td>
						<td>
							<button class="btn btn-success btn-sm" 
								onclick="downloadCertificate('{{$enroled->enrol_code}}')"
								>
							<span class="mbri-save mbr-iconfont mbr-iconfont-btn"></span> Baixar o certificado
							</button>
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.16/af-2.2.2/b-1.4.2/b-colvis-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/cr-1.4.1/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/rg-1.0.2/rr-1.2.3/sc-1.4.3/sl-1.2.3/datatables.min.js"></script>
<script src="//cdn.rawgit.com/ashl1/datatables-rowsgroup/v1.0.0/dataTables.rowsGroup.js"></script>
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
            },
            buttons: {
                pageLength: {
                    '-1': 'Total por página: Todos',
                    _: 'Total por página: %d'
                }
            }

        },
        dom: 'Bfrtip',
        lengthMenu: [
            [10, 25, 50, -1],
            ['10', '25', '50', 'Todos']
        ],
        buttons: [
            {
                extend: 'copyHtml5',
                text: 'Copiar',
                //exportOptions: {modifier: {page: 'current'}}
            },
            'excelHtml5',
            'csvHtml5',
            {
                extend: 'pdfHtml5',
                orientation: 'landscape'
            },
            'pageLength'
        ],
        columns: [
            {name: 'inscrito', data: 'inscrito'},
            {name: 'matricula', data: 'matricula'},
            {name: 'valor', data: 'valor'},
            {name: 'pagamento', data: 'pagamento'},
            {name: 'atividade', data: 'atividade'},
            {name: 'presente', data: 'presente'},
            {name: 'certificado', data: 'certificado'},
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
    $('div.dt-buttons').addClass('btn-group').css('float', 'left');
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

<!-- scripts dos certificados -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
<script>
	var $certificateURLs = {
		api: "{{action('Certificate\CertificateController@apiCertificate')}}",
		validator: "{{action('Certificate\CertificateController@validateCertificate')}}"
	};
</script>
<script src="{{asset('assets/app/app.js')}}"></script>
@endpush
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
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>Inscrito</th>
                        <th>Matrícula</th>
                        <th>Atividade</th>
                        <th>Pagamento</th>
                        <th>Presente?</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Estudante</th>
                        <th>Matrícula</th>
                        <th>Atividade</th>
                        <th>Pagamento</th>
                        <th>Presente?</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
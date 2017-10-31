@extends('template.public.index')
@section('metaTitle', 'Meus certificados - Semana de Tecnologia da FAT')
@section('metaDescription', 'A Semana Tech é o evento de tenologia da Faculdade Anísio Teixeira pela coordenação, professores e alunos dos cursos de Sistemas para Internet e Redes de Computadores')
@section('page')
<section class="mbr-section extTable1" id="extTable1-12" data-rv-view="63" style="background-color: rgb(255, 255, 255); padding-top: 140px; padding-bottom: 20px;">
	<div class="container">
		<h3 class="mbr-section-title display-2">Certificados</h3>
	</div>
	@if(\App\QuestionAnswer::where('user_id', \Auth::user()->id)->count() >= 1)
	<div class="container table-wrapper" info3-text="(filtered from" data-search="true" search-text="Buscar:" info1-text="Mostrando" info2-text="ocorrências" info4-text="total ocorrências)">
		<table class="table" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Atividade</th>
					<th>Participou da atividade?</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
                @foreach($activities as $activity)
				<tr>
					<td>{{$activity->activity_type}} - {{$activity->activity_name}}</td>
					<td>{{$activity->is_present ? 'Sim' : 'Não'}}</td>
					<td>
                        @if($activity->is_present)
                        <button class="btn btn-success btn-sm" 
								onclick="downloadCertificate('{{$activity->enrol_code}}')"
								>
                            <span class="mbri-save mbr-iconfont mbr-iconfont-btn"></span> Baixar o certificado
                        </button>
                        @else
                        <button class="btn btn-default btn-sm disabled"  
                                data-toggle="tooltip" 
                                data-placement="top" 
                                title="Que pena! Você se inscreveu e não participou desta atividade. Os certificados são emitos apenas mediante a participação."
								>
                            <span class="mbri-save mbr-iconfont mbr-iconfont-btn"></span> Baixar o certificado
                        </button>
                        @endif
                    </td>
				</tr>
                @endforeach
			</tbody>
		</table>
	</div>
	@else
	<style>
	.form-check.form-check-inline {
		display: inline-block;
		margin-right: 20px;
	}
	@media (min-width: 768px){
		.offset-md-2 {
			margin-left: 16.666666%;
		}
	}
	</style>
	<div class="container table-wrapper">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h3 class="text-xs-center">
					Antes de baixar os seus certificados, queremos fazer uma pesquisa de 
					satisfação. <br>São apenas 5 perguntinhas...
				</h3>
				{!! Form::open(['action'=> 'CustomerSatisfaction\CustomerSatisfactionController@store', 'id'=>'form']) !!}
					<table class="table table-striped">
						<tbody>
							@foreach($questions->where('type', 'question')->all() as $question)
							<tr>
								<td>
									<div class="form-group">
										<h6>{{$question->question}}</h6>
										@foreach($answers as $answer)
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" 
														   type="radio" 
														   name="questions[{{$question->id}}]"
														   value="{{$answer->id}}"
														   required> {{$answer->answer}}
												</label>
											</div>
										@endforeach
									</div>
								</td>
							</tr>
							@endforeach
							<tr>
								<td>
									<button class="btn btn-sm btn-success" type="submit" name="button" value="submit">
										Responder
									</button>
									<button class="btn btn-sm btn-link" type="submit" name="button" value="skip" onclick="submitFormWithoutAnswers()">
										{{$questions->where('type', 'skip')->first()->question}}
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
	@endif
</section>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.33/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.33/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
<script>
	var $certificateURLs = {
		api: "{{action('Certificate\CertificateController@apiCertificate')}}",
		validator: "{{action('Certificate\CertificateController@validateCertificate')}}"
	};
</script>
<script src="{{asset('assets/app/app.js')}}"></script>
<script>
	function submitFormWithoutAnswers(){
		$('.form-check-input').removeAttr('required');
		$( "form#form" ).submit();
	}
</script>
@endpush
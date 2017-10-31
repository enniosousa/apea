@extends('template.public.index')
@section('metaTitle', 'Inscrições online encerradas - Semana de Tecnologia da FAT')
@section('metaDescription', 'A Semana Tech é o evento de tenologia da Faculdade Anísio Teixeira pela coordenação, professores e alunos dos cursos de Sistemas para Internet e Redes de Computadores')
@section('page')
<style>
#extFeatures2-11 P {
  color: #ffffff;
}
#extFeatures2-11 .intro-box h4 {
  color: #f7da64;
}
#extFeatures2-11 H2 {
  color: #fac51c;
}
.fa-5 {
    font-size: 12em;
}
.fa-4 {
    font-size: 7em;
}
</style>
<section class="mbr-section mbr-section__container article" id="header3-z" data-rv-view="132" style="background-color: rgb(239, 239, 239); padding-top: 20px; padding-bottom: 20px;margin-top: 120px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="mbr-section-title display-2">Validação de certificado</h3>
            </div>
        </div>
    </div>
</section>
<section class="mbr-info mbr-info-extra mbr-section mbr-section-md-padding" id="msg-box1-13" data-rv-view="226" style="background-color: rgb(239, 239, 239); padding-top: 20px; padding-bottom: 20px;">
	<div class="container">
		<div class="row">
            <form>
                <div class="mbr-table-md-up">
                    <div class="mbr-table-cell mbr-right-padding-md-up col-md-10 text-xs-center text-md-left">
                        <div class="form-group">
                            <input id="certificate_code" 
                                   type="text" 
                                   class="form-control" 
                                   placeholder="Código do certificado" 
                                   name="code"
                                   value="{{$code}}">
                        </div>
                    </div>
                    <div class="mbr-table-cell col-md-2 text-md-left">
                        <div class="text-xs-center">
                            <button class="btn btn-primary" type="submit">VALIDAR O CERTIFICADO</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mbr-table-md-up">
				<div class="mbr-table-cell mbr-right-padding-md-up col-md-12 text-xs-center text-md-left">
                     @if($code !== null && $activity != null)
                    <p class="text-xs-center">
                        <i class="fa fa-check-circle fa-4" aria-hidden="true" style="color:green"></i>
                    </p>
                    <p class="text-xs-center">
                        Certificamos que <b>{{$activity->participant_name}}</b> participou
                        {{$activity->activity_type == 'Palestra' ? 'da' : 'do'}} <b>{{$activity->activity_type}}
                        sobre {{$activity->activity_name}}</b> {{count($activity->dates) > 1 ? 'nos dias' : 'no dia'}}
                        @foreach($activity->dates as $date)
                            @if ($loop->first)
								{{$date}}
                            @elseif ($loop->last)
                                e {{$date}}
                            @else
                                , {{$date}}
                            @endif
                        @endforeach
                        na IV Semana de Tecnologia da Faculdade Anísio Teixeira.
                    </p>
                    @elseif($code !== null && $activity == null)
                    <p class="text-xs-center">
                        <i class="fa fa-times-circle fa-4" aria-hidden="true" style="color:red"></i>
                    </p>
                    <p class="text-xs-center">
                        Não encontramos um certificado com o código informado.
                    </p>
                    @endif
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
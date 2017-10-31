<div class="list-group-item list-group-item-action flex-column align-items-start">
	<div class="d-flex w-100 justify-content-between">
		<small class="pull-right">
			@if($activity->enroleds < $activity->vacancies)
				@if($activity->type === 'Minicurso')
					<input 
				   name="Minicurso" 
				   value="{{$activity->id}}" 
				   type="radio" 
				   class="custom-control-input"
				   <?php if(in_array($activity->id, \Auth::user()->enrolsIds()) || old('Minicurso') == $activity->id): ?> checked <?php endif; ?>
					>
			   @else
					<input 
				   name="Palestra[{{$activity->id}}]" 
				   value="{{$activity->id}}" 
				   type="checkbox" 
				   class="custom-control-input"
					<?php if(in_array($activity->id, \Auth::user()->enrolsIds()) || old("Palestra.{$activity->id}")): ?> checked <?php endif; ?>
					>
				@endif
			@else
			<input type="{{$activity->type === 'Minicurso' ? 'radio' : 'checkbox'}}" class="custom-control-input" disabled>
			@endif
		</small>
		<h5 class="mb-1">{{$activity->name}}</h5>
	</div>
	<p class="mb-1">
		@forelse($activity->dates as $date)
			<span class="badge badge-default">
				<span class="mbri-calendar"></span> {{$date->start->format('d/m/Y')}} das {{$date->start->format('H:m')}} às {{$date->end->format('H:m')}}
			</span>
		@empty 
			<span class="badge badge-default">
				<span class="mbri-calendar"></span> Sem data definida
			</span>&nbsp;&nbsp;
		@endforelse 
		<span class="badge badge-default"><span class="mbri-users"></span> {{$activity->enroleds}}/{{$activity->vacancies}}</span>
		<br> {!!$activity->description!!}
	</p>
</div>
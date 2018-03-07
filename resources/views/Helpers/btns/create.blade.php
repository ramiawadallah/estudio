<?php 

	$href = !empty($url) ? $url : url()->current().'/create';
?>

@if(!empty($attr))

	<a href="{{ $href }}" class="btn bg-teal waves-effect"

	@foreach($attr as $key => $value)
	{{ $key }}="{{ $value }}" &nbsp

	@endforeach

	>
	<i class="material-icons">control_point</i> 
	{{ trans('lang.create') }}</a>

@else
	<a href="{{ $href }}" class="btn bg-teal waves-effect">
	<i class="material-icons">control_point</i>
	{{ trans('lang.create') }}
	</a>

@endif


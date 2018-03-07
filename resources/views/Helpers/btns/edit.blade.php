<?php 

	$href = !empty($url) ? $url : url()->current().'/'.$id.'/edit';	

?>

@if(!empty($attr))
	
		<a href="{{ $href }}" class="btn bg-pink waves-effect" 

		@foreach($attr as $key => $value)
		{{ $key }}="{{ $value }}" &nbsp

		@endforeach

		title="{{ trans('lang.edit') }}" class="btn btn-default btn-sm btn-icon icon-left"><i class="material-icons">create</i>Edit</a>
@else
		<a href="{{ $href }}" title="{{ trans('lang.edit') }}" class="btn bg-pink waves-effect" ><i class="material-icons">create</i> Edit</a>
@endif



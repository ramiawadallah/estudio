<?php 

	$href = !empty($url) ? $url : url()->current().'/'.$id;

		

?>
@if(!empty($attr))
		<a href="{{ $href }}" class="btn btn-info waves-effect" 
			@foreach($attr as $key => $value)
			{{ $key }}="{{ $value }}" &nbsp

			@endforeach

			class="btn btn-info btn-sm btn-icon icon-left"
			>
			<i class="material-icons">visibility</i>
			View
		</a>
@else
		<a href="{{ $href }}"  class="btn btn-info waves-effect">
		    <i class="material-icons">visibility</i>
		    View
		</a>

@endif





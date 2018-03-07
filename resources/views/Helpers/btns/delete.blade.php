<?php 

if(!empty($name))
{
	$name = $name ;
}elseif(empty($name) && empty($options['name']))
{
	$name = trans('lang.thefield');

}elseif(!empty($options['name'])){
	$name =$options['name'];
}
	$options = !empty($options) ? $options :'';

	if (is_numeric($options))
	{
		$url = url()->current().'/'.$options;
	}elseif(is_array($options)){
		$url = isset($options['url']) ? $options['url'] : url()->current();
	}else{
		$url = url()->current();
	}

?>

@if(is_array($options))

{{ Form::open(['url' => [$url], 'method' => 'DELETE']) }}
		<a class="btn bg-red waves-effect delete">

			@foreach($options as $key => $value)
				@if ($key != 'url')
					{{ $key }}="{{ $value }}" &nbsp
				@endif
			@endforeach
	    <i class="material-icons">delete</i>  Delete </a>

{{Form::close()}}
@else

{{ Form::open(['url' => [$url], 'method' => 'DELETE', 'id'=>'myform']) }}

         <button type="submit" title="{{ trans('lang.edit') }}"  class="btn bg-red waves-effect" id="btn-submit" onclick="return confirm('{{trans('lang.delete_msg',['var'=>$name])}}')">
        	<i class="material-icons">delete</i>  Delete
		 </button>
		 
{{Form::close()}}

@endif



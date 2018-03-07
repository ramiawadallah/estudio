
<?php
	$attributes = !empty($attributes) ? $attributes : [];
	$values = isset($value) ? $value : '';
   $style = isset($attributes['style']) ? $attributes['style'] : 'inline';
?>

<div class="demo-radio-button {{ $errors->has($name) ? ' has-error' : '' }}">
	<label>{{ trans('lang.'.$name) }}</label>
	<br>
	@foreach ($options as $value => $label)
		

		<input name="{{ $name }}"  value="{{ $value }}"  type="radio" id="{{ $value }}" class="with-gap" @if($value == $values) checked @endif />
		<label for="{{ $value }}">{{ $label }}</label>

	@endforeach
</div>


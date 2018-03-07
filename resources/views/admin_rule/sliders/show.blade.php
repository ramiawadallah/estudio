@extends('layouts.admin')
@section('title') {{ trans('lang.sliders') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $slider->trans('info') !!}</p>
</div>
 
@endsection
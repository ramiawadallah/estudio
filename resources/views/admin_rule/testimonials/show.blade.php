@extends('layouts.admin')
@section('title') {{ trans('lang.testimonials') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $testimonial->trans('info') !!}</p>
</div>
 
@endsection
@extends('layouts.admin')
@section('title') {{ trans('lang.postcats') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $postcat->trans('info') !!}</p>
</div>
 
@endsection
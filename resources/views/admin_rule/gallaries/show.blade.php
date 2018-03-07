@extends('layouts.admin')
@section('title') {{ trans('lang.gallaries') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $gallary->trans('info') !!}</p>
</div>
 
@endsection
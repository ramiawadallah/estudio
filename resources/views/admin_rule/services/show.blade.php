@extends('layouts.admin')
@section('title') {{ trans('lang.services') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $service->trans('info') !!}</p>
</div>
 
@endsection
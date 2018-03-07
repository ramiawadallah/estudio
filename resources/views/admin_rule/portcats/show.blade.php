@extends('layouts.admin')
@section('title') {{ trans('lang.portcats') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $portcat->trans('info') !!}</p>
</div>
 
@endsection
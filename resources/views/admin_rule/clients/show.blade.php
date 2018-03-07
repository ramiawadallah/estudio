@extends('layouts.admin')
@section('title') {{ trans('lang.clients') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $client->trans('info') !!}</p>
</div>
 
@endsection
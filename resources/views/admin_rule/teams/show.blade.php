@extends('layouts.admin')
@section('title') {{ trans('lang.teams') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $team->trans('info') !!}</p>
</div>
 
@endsection
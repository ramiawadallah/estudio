@extends('layouts.admin')
@section('title') {{ trans('lang.portfolios') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $portfolio->trans('info') !!}</p>
</div>
 
@endsection
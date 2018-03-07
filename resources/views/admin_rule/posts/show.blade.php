@extends('layouts.admin')
@section('title') {{ trans('lang.posts') }}  @endsection
@section('content')

<div class="note note-info">
    <p>{!! $post->trans('info') !!}</p>
</div>
 
@endsection
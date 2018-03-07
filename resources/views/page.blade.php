@extends('layouts.home')
@section('title') {{ $page->trans('title') }} @endsection()

@section('content')
	@if($page->view)
		{!! $page->view->render() !!}
	@else
		<!-- page-title-section start -->
			<section class="page-title-section about-us-one" style="background-image: url( public/uploads/{{$page->photo}});" data-stellar-background-ratio="0.1">
			  <div class="container">
			    <div class="page-header text-center">
			      <h1>{{ strtoupper($page->trans('title')) }}</h1>
			    </div>
			  </div>
			</section>
		<!-- page-title-section end -->

		<div class="container" style="padding-top: 50px; padding-left: 10px; padding-right: 10px; padding-bottom: 50px;" >
		    <h1 class="section-title">{{ strtoupper($page->trans('title')) }}</h1>
		    <br>
		    {!! $page->trans('content') !!}
	    </div>
    @endif
@endsection
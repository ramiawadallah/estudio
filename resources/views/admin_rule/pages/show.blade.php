@extends('layouts.admin')
@section('title') {{ trans('lang.pages') }}  @endsection
@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
		<div class="card">

			<div class="header">
			    <h1>{!! $page->trans('title') !!}</h1>
			</div>

			<div class="col-lg-12">
				<p>{!! $page->trans('content') !!}</p>
			</div>

		</div>
	</div>
</div>
 
@endsection
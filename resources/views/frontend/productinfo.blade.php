@extends('layouts.home')
@section('title') {{ $product->trans('title') }} @endsection()


@section('content')
	
	<br>
	<br>
	<br>
	<!-- PRODUCT DETAILS -->
		<section class="module-sm divider-bottom bg-white-dark">
			<div class="container">
				<div class="row">
					<!-- PRODUCT SLIDER -->
					<div class="col-sm-6 wow slideInLeft">
						<div class="product-slider" style="direction: ltr !important;">
							@foreach(App\Image::where('products_id', $product->id )->get() as $image)
								<div class="item"><img src="../public/uploads/products/{{ $image->photo }}" alt=""></div>
							@endforeach()

						</div>
					</div>
					<!-- END PRODUCT SLIDER -->
						
					<div class="col-sm-6 wow slideInRight">
						<div class="product-description m-b-30">
							<h1 class="lead divider-line" style="font-size: 32px !important;">{{ strtoupper($product->trans('title')) }}</h1>
						</div>

						<!-- TABS NAV-->
						<ul class="nav-text-tabs">
							<li class="active"><a href="#indication" data-toggle="tab">{{ trans('product.Indication')}}</a></li>
							<li><a href="#strength" data-toggle="tab">{{ trans('product.Strength & dosage form')}}</a></li>
							<li><a href="#molecule" data-toggle="tab">{{ trans('product.Molecule')}}</a></li>
						</ul>
						<!-- END TABS NAV-->

						<!-- TAB CONTENT -->
						<div class="tab-content">

							<div id="indication" class="tab-pane active">
								{!! $product->trans('content') !!}
							</div>


							<div id="strength" class="tab-pane">
								<table class="table table-striped table-hover">
									<tbody>


										@if(app()->getLocale() == 'ar')

											@foreach( explode("،" , $product->trans('strength')) as $str) 
												<tr>
													<th>{{ $str }}</th>
												</tr>
											@endforeach()

										@else()

											@foreach( explode("," , $product->trans('strength')) as $str) 
												<tr>
													<th>{{ $str }}</th>
												</tr>
											@endforeach()

										@endif()

										

									</tbody>
								</table>
							</div>
							<div id="molecule" class="tab-pane">
								{!! $product->trans('molecule') !!}
							</div>

							

						</div>
						<!-- END TAB CONTENT -->

					</div>
			</div>
		</section>
		<!-- END PRODUCT DETAILS -->


@endsection()
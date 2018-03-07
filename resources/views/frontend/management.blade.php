@extends('layouts.home')
@section('title') {{ $manage->trans('name') }} @endsection()


@section('content')

<?php  
	    if(empty($manage->photo)){
	        $photo = "unknown_image.png";
	    }else{
	        $photo = $manage->photo;
	    }
	?>



<section class="module-sm divider-bottom" style="top:60px;">
	<div class="container">

		<div class="row">

			<!-- PRODUCT SLIDER -->
			<div class="col-sm-4">
				<img src="uploads/<?php echo $photo; ?>" class="img-responsive" alt="<?php echo $photo; ?>" style="max-height: 80%;">
			</div>
			<!-- END PRODUCT SLIDER -->

			<div class="col-sm-8">
				<div class="product-description m-b-30">
					<h2 class="m-b-5">{{ $manage->trans('name') }}</h2>
				</div>
				<h5>{{ $manage->trans('title') }}</h5>
				<hr class="m-t-30 m-b-30">

				<p>{!! $manage->trans('content') !!}</p>

			
			</div>
		</div><!-- .row -->

	</div>
</section>

	


@endsection()
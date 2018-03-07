@extends('layouts.admin')
@section('title') {{ trans('lang.languages') }}  @endsection
@section('content')

{!! bsForm::start(['route'=>'store_langs']) !!}

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card">
	    <div class="header">
	        <h2>
	             Create new Language
	        </h2>
	        <ul class="header-dropdown m-r--5">
	            <li class="dropdown">
	                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	                    <i class="material-icons">more_vert</i>
	                </a>
	                <ul class="dropdown-menu pull-right">
	                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
	                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
	                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
	                </ul>
	            </li>
	        </ul>
	    </div>
	    <div class="body">

			{!!bsForm::text('name') !!}
	    	{!!bsForm::text('code') !!}

	    	{!! bsForm::radio('direction',[
	    		'ltr'=> trans('lang.ltr'),
	    		'rtl'=> trans('lang.rtl'),
	    	]) !!}

	    	<hr/r>

    		<div class="form-group">
                <input type="checkbox" value="1" name="default" id="checkbox" name="checkbox">
                <label for="checkbox">{{ trans('lang.default_lang') }}</label>
            </div>
	    	
            <hr/r>

  			<div class="form-group">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#myModal">
					  {{ trans('lang.select_flug') }}
					</button>
			</div>

		</div>
	</div>
</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">{{ trans('lang.select_flug') }}</h4>
	      </div>
	      <div class="modal-body ">

	      <table class="">
	        <tbody>
	            <tr>
	            	<div class="form-group">
			        <div data-toggle="buttons">
						<?php $i = 0; ?>
						@foreach (flugs() as $flug)
							<?php $i++; ?>
								<label class="btn flug_btn btn-circle"><input type="radio"  name="flug" value="{{ $flug['file'] }}"><img src="{{ $flug['url'] }}" /></label>
							@if ($i==13)
								<?php $i = 0; ?>
							@endif
						@endforeach
					 </div>
			       </div>
		        </tr>
		     </tbody>
			</table>

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('lang.continue') }}</button>
	      </div>
	    </div>
	  </div>
	</div>


@endsection
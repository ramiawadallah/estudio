@extends('layouts.admin')
@section('title') {{ trans('lang.settings') }}  @endsection
@section('content')

{!! bsForm::start(['route'=>['admin.settings.update',1],'files'=>true,'method'=>'put']) !!}

	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		<div class="card">
		    <div class="header">
		        <h2>
		             Website main setting
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

					{!! bsForm::translate(function($form,$lang){
	                    $form->text('title',site('title',$lang));
	                    $form->text('subtitle',site('subtitle',$lang));
	                    $form->text('copyright',site('copyright',$lang));
	                    $form->text('address',site('address',$lang));
	                    $form->textarea('desc',site('desc',$lang));
	                }) !!}

					{!! bsForm::text('email',site('email')) !!}

					{!! bsForm::text('phone',site('phone')) !!}

					{!! bsForm::text('fax',site('fax')) !!}

					{!! bsForm::text('pobox',site('pobox')) !!}

					{!! bsForm::text('map',site('map')) !!}

					{!! bsForm::text('keywords',site('keywords')) !!}

					{!! bsForm::text('facebook',site('facebook')) !!}

					{!! bsForm::text('twitter',site('twitter')) !!}

					{!! bsForm::text('linkedin',site('linkedin')) !!}

					{!! bsForm::text('instagram',site('instagram')) !!}

					{!! bsForm::text('youtube',site('youtube')) !!}

					<label>{{ trans('lang.maintenance')}}</label>
					<div data-toggle="buttons">
						<label class="btn btn-lg btn-info {{ $settings->maintenance == 'open' ? 'active' : '' }}"><input tabindex="8" class="icheck-11" type="radio" id="minimal-radio-2-11" value="open" name="maintenance">{{ trans('lang.maintenance_open') }}</label>
						<label class="btn btn-lg btn-info {{ $settings->maintenance == 'close' ? 'active' : '' }}"><input tabindex="8" class="icheck-11" type="radio" id="minimal-radio-2-11" value="close" name="maintenance">{{ trans('lang.maintenance_close') }}</label>
					</div>

				</div>
			</div>
		</div>
	</div>


	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<div class="card">
		    <div class="header">
		        <h2>
		             Website Edit logo
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

		    {!! bsForm::image('photo',$settings->photo) !!}

			</div>
		</div>
	</div>


	{!! Form::close() !!}


@endsection
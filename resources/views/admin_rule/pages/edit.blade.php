@extends('layouts.admin')
@section('title') {{ trans('lang.pages') }}  @endsection
@section('content')
{!! bsForm::start(['route'=>['admin.pages.update',$page->id],'files'=>true,'method'=>'put']) !!}

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	<div class="card">
	    <div class="header">
	        <h2>
	             Edit page
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

			    {!! bsForm::translate(function($form,$lang) use($page){

		        $form->text('title',$page->trans('title',$lang));
		        $form->textarea('content',$page->trans('content',$lang),['class'=>'editor form-control']);

			    }) !!}

			    {!! bsForm::uri('uri',$page->uri) !!}
	    </div>
	</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
	<div class="card">
	    <div class="header">
	        <h2>
	             Page Settings
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
	    		{!! bsForm::image('photo',$page->photo) !!}

		        {!! bsForm::radio('stutes',[
		    		'active'=> trans('lang.yes'),
		    		'not active'=> trans('lang.no'),
		    	],$page->stutes) !!}

        		{!! bsForm::select('template',$templates, $page->template)!!}
            	{!! bsForm::select('order', ['' => 'None' , 'before' => 'Before', 'after' => 'After', 'childOf' => 'Child Of'], null)!!}
            	{!! bsForm::select('orderPage',['' => 'None'] + $orderPages->pluck('padded_title', 'id')->toArray(), null)!!}
	    </div>
	</div>
</div>

{!! bsForm::end() !!}

@endsection
@extends('layouts.admin')
@section('title') {{ trans('lang.services') }}  @endsection
@section('content')

{!! bsForm::start(['route'=>['admin.services.update',$service->id],'method'=>'put','enctype'=>'multipart/form-data']) !!}

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 Create new Service  
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

    
    {!! bsForm::translate(function($form,$lang) use($service){

        $form->text('title',$service->trans('title',$lang));
        $form->textarea('content',$service->trans('content',$lang),['class'=>'editor form-control']);

    }) !!}

    {!! bsForm::uri('uri',$service->uri) !!}

        </div>
    </div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 Service  Settings
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
                {!! bsForm::image('photo',$service->photo) !!}
                <label>Photo Size 80 X 80</label>
                <hr>

                {!! bsForm::radio('stutes',[
                    'active'=> trans('lang.yes'),
                    'not active'=> trans('lang.no'),
                ],$service->stutes) !!}
        </div>
    </div>
</div>


{!! bsForm::end() !!}

@endsection
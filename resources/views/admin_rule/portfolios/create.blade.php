@extends('layouts.admin')
@section('title') {{ trans('lang.portfolios') }}  @endsection
@section('content')

{!! bsForm::start(['route'=>'admin.portfolios.store','enctype'=>'multipart/form-data']) !!}

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 Create new Portfolio  
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
            
            {!! bsForm::multimage('image') !!}

       </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 Portfolio  Settings
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
                
                {!! bsForm::radio('stutes',[
                    'active'=> trans('lang.yes'),
                    'not active'=> trans('lang.no'),
                ]) !!}

                <hr>

                {!! Form::select('portcats_id', ['' => 'Select Portfolio Catygory'] + App\Portcat::pluck('title','id')->toArray(), null , ['class' => 'form-control']) !!}

        </div>
    </div>
</div>

<script type="text/javascript">
        function readURL(input) {
        if (input.files && input.files[0]) {
            var i;
            for (i = 0; i < input.files.length; ++i) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#form1').append('<img src="'+e.target.result+'">');
              }
              reader.readAsDataURL(input.files[i]);
            }
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
</script>

{!! bsForm::end() !!}

@endsection
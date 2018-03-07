<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class View extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:view {name} {path=null}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command Used To Set Recource Views Files With Data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->viewIndex();
        $this->viewCreate();
        $this->viewEdit();
        $this->viewShow();
    }
    public function createPath($path=null)
    {
        if (!is_null($path)) 
        {
            $path = str_replace('\\', '/', $path);
            $pathArray = explode('/', $path);

            $d ='';
            $paths = [];
            foreach ($pathArray as $key => $dir) {
                $d .= $key == 0 ? $dir : '/'.$dir;
                $paths[] = $d;
            }
            foreach ($paths as $folder) 
            {
                if (!is_dir($folder)) 
                {
                    @mkdir($folder);
                }
            }
        }
    }

    public function viewIndex()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
        if (!is_dir($path)) 
        {
            $this->createPath($path);
            $this->info('Folder ('.str_plural(snake_case($this->argument('name'))).') Was Created Successfuly.');
        }else{
            $this->error('Folder ('.str_plural(snake_case($this->argument('name'))).') already Exist!');
        }
            
$data = '@extends(\'layouts.admin\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'content\')

    

    <!-- END EXAMPLE TABLE PORTLET-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        '.ucwords(snake_case($this->argument('name'))).'  
                        <br>
                            <small>All '.ucwords(snake_case($this->argument('name'))).' </small>
                        <br>
                        {!! Btn::create() !!}
                    </h2>
                </div>
                <div class="body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable" width="100%">
                            <thead>
                                <tr>
                                     <th>{{ trans(\'lang.title\') }}</th>
                                     <th>{{ trans(\'lang.photo\') }}</th>
                                     <th>{{ trans(\'lang.stutes\') }}</th>
                                     <th>{{ trans(\'lang.createAt\') }}</th>
                                     <th>{{ trans(\'lang.view\') }}</th>
                                     <th>{{ trans(\'lang.edit\') }}</th>
                                     <th>{{ trans(\'lang.delete\') }}</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>{{ trans(\'lang.title\') }}</th>
                                     <th>{{ trans(\'lang.photo\') }}</th>
                                     <th>{{ trans(\'lang.stutes\') }}</th>
                                     <th>{{ trans(\'lang.createAt\') }}</th>
                                     <th>{{ trans(\'lang.view\') }}</th>
                                     <th>{{ trans(\'lang.edit\') }}</th>
                                     <th>{{ trans(\'lang.delete\') }}</th>
                                </tr>
                            </tfoot>
                        <tbody>
                        @foreach($'.str_plural(snake_case($this->argument('name'))).' as $'.str_singular(snake_case($this->argument('name'))).')
                        <tr>
                             

                             <td>{{ $'.str_singular(snake_case($this->argument('name'))).'->trans(\'title\') }}</td>

                             <td><img src="/uploads/{{ $'.str_singular(snake_case($this->argument('name'))).'->photo }}" style="max-width:150px;"></td>

                             <td>{{ $'.str_singular(snake_case($this->argument('name'))).'->trans(\'stutes\') }}</td>

                             <td>{{ date(\'Y/m/d\',strtotime($'.str_singular(snake_case($this->argument('name'))).'->created_at)) }}</td>

                             <td>{!! Btn::view($'.str_singular(snake_case($this->argument('name'))).'->id) !!}</td>

                             <td>{!! Btn::edit($'.str_singular(snake_case($this->argument('name'))).'->id) !!}</td>

                             <td>{!! Btn::delete($'.str_singular(snake_case($this->argument('name'))).'->id,$'.str_singular(snake_case($this->argument('name'))).'->trans(\'name\')) !!}</td>

                        </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <div>
    <div>


@endsection';
        if (!file_exists($path.'/index.blade.php')) 
        {
            $file = fopen($path.'/index.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (index.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (index.blade.php) already Exist!');
        }
    }









    
    public function viewCreate()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
            
$data = '@extends(\'layouts.admin\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'content\')

{!! bsForm::start([\'route\'=>\'admin.'.str_plural(snake_case($this->argument('name'))).'.store\',\'enctype\'=>\'multipart/form-data\']) !!}

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 Create new '.ucwords(snake_case($this->argument('name'))).'  
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


    
    {!! bsForm::translate(function($form){

        $form->text(\'title\');
        $form->textarea(\'content\',null,[\'class\'=>\'editor form-control\']);

    }) !!}

    {!! bsForm::uri(\'uri\') !!}

       </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 '.ucwords(snake_case($this->argument('name'))).'  Settings
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
                {!! bsForm::image(\'photo\') !!}

                <hr>

                {!! bsForm::radio(\'stutes\',[
                    \'active\'=> trans(\'lang.yes\'),
                    \'not active\'=> trans(\'lang.no\'),
                ]) !!}
        </div>
    </div>
</div>


{!! bsForm::end() !!}

@endsection';
        if (!file_exists($path.'/create.blade.php')) 
        {
            $file = fopen($path.'/create.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (create.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (create.blade.php) already Exist!');
        }
    }  


    public function viewEdit()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
            
$data = '@extends(\'layouts.admin\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'content\')

{!! bsForm::start([\'route\'=>[\'admin.'.str_plural(snake_case($this->argument('name'))).'.update\',$'.str_singular(snake_case($this->argument('name'))).'->id],\'method\'=>\'put\',\'enctype\'=>\'multipart/form-data\']) !!}

<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 Create new '.ucwords(snake_case($this->argument('name'))).'  
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

    
    {!! bsForm::translate(function($form,$lang) use($'.str_singular(snake_case($this->argument('name'))).'){

        $form->text(\'title\',$'.str_singular(snake_case($this->argument('name'))).'->trans(\'title\',$lang));
        $form->textarea(\'content\',$'.str_singular(snake_case($this->argument('name'))).'->trans(\'content\',$lang),[\'class\'=>\'editor form-control\']);

    }) !!}

    {!! bsForm::uri(\'uri\',$'.str_singular(snake_case($this->argument('name'))).'->uri) !!}

        </div>
    </div>
</div>


<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                 '.ucwords(snake_case($this->argument('name'))).'  Settings
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
                {!! bsForm::image(\'photo\',$'.str_singular(snake_case($this->argument('name'))).'->photo) !!}

                <hr>

                {!! bsForm::radio(\'stutes\',[
                    \'active\'=> trans(\'lang.yes\'),
                    \'not active\'=> trans(\'lang.no\'),
                ],$'.str_singular(snake_case($this->argument('name'))).'->stutes) !!}
        </div>
    </div>
</div>


{!! bsForm::end() !!}

@endsection';
        if (!file_exists($path.'/edit.blade.php')) 
        {
            $file = fopen($path.'/edit.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (edit.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (edit.blade.php) already Exist!');
        }
    }



    public function viewShow()
    {
        if ($this->argument('path') == 'null') 
        {
            $path = base_path('resources/views').'/'.str_plural(snake_case($this->argument('name')));
        }else{
            
            $path = base_path('resources/views').'/'.$this->argument('path').'/'.str_plural(snake_case($this->argument('name')));

        }
            
$data = '@extends(\'layouts.admin\')
@section(\'title\') {{ trans(\'lang.'.str_plural(snake_case($this->argument('name'))).'\') }}  @endsection
@section(\'content\')

<div class="note note-info">
    <p>{!! $'.str_singular(snake_case($this->argument('name'))).'->trans(\'info\') !!}</p>
</div>
 
@endsection';
        if (!file_exists($path.'/show.blade.php')) 
        {
            $file = fopen($path.'/show.blade.php', "w");
            fwrite($file, $data);
            fclose($file);
            $this->info('File (show.blade.php) Was Created Successfuly.');
        }else{
            $this->error('File (show.blade.php) already Exist!');
        }
    }
}

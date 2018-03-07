@extends('layouts.admin')
@section('title') {{ trans('lang.languages') }}  @endsection
@section('content')

<!-- END EXAMPLE TABLE PORTLET-->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Languages
                    <br>
                    <small>All Languages</small>
                    <br>
                    {!! Btn::create() !!}
                </h2>
              
            </div>
            <div class="body">
                 <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                 <th>{{ trans('lang.name') }}</th>
                                 <th>{{ trans('lang.created_at') }}</th>
                                 <th>{{ trans('lang.trans_files')}}</th>
                                 <th>{{ trans('lang.view') }}</th>
                                 <th>{{ trans('lang.edit') }}</th>
                                 <th>{{ trans('lang.delete') }}</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 <th>{{ trans('lang.name') }}</th>
                                 <th>{{ trans('lang.created_at') }}</th>
                                 <th>{{ trans('lang.trans_files')}}</th>
                                 <th>{{ trans('lang.view') }}</th>
                                 <th>{{ trans('lang.edit') }}</th>
                                 <th>{{ trans('lang.delete') }}</th>
                            </tr>
                        </tfoot>
                        <tbody>

                        @foreach($langs as $language)
                        <tr>
                             <td>{{ $language->trans('name') }}</td>
                             <td>{{ date('Y/m/d',strtotime($language->created_at)) }}</td>
                             <td>
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-files-{{ $language->id }}'>{{ trans('lang.trans_files') }}</a>      
                                <div class="modal fade" id="modal-files-{{ $language->id }}">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="lang_files_result"></div>
                                                <div role="tabpanel">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs" role="tablist">
                                                    @foreach (langFiles($language->code) as $key => $file)
                                                    <li role="presentation" class="{{ $key == 0 ? 'active' : '' }}">
                                                        <a href="#lang_files_{{ $key }}-{{ $language->id }}" aria-controls="lang_files_{{ $key }}-{{ $language->id }}" role="tab" data-toggle="tab">
                                                        {{ ucfirst(explode('.', $file['name'])[0]) }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                @foreach (langFiles($language->code) as $key => $file)
                                                    <div role="tabpanel" class="tab-pane {{ $key == 0 ? 'active' : '' }}" id="lang_files_{{ $key }}-{{ $language->id }}">
                                                    {!! Form::open(['route' => 'update_file']) !!}

                                                        <div file="{{ $file['name'] }}"  dir="ltr" lang-id="{{ $language->id }}">

                                                            {{-- <textarea name="content[]" file="{{ $file['name'] }}" lang-id="{{ $language->id }}" class="content form-control" id="" cols="30" rows="20"> --}}
                                                            <?php
                                                            // $content = file_get_contents($file['path']);
                                                            $content = @ include $file['path'];
                                                            ?>
                                                            {{-- </textarea> --}}

                                                                <div class="alert" style="height:400px;overflow: auto; width: 100%; " dir="rtl">
                                                                    @foreach ($content as $k => $v)
                                                                        @if (!is_array($v))
                                                                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                                                                <button class="btn bg-blue-grey btn-lg btn-block waves-effect" type="button">{{ $k }}</button>
                                                                            </div>
                                                        
                                                                            <div class="col-sm-9">
                                                                                <div class="form-group">
                                                                                    <div class="form-line">
                                                                                        <input id="name" value="{{ $v }}" class="form-control" placeholder="Title" name="content_{{ $file['name'] }}[]" type="text">
                                                                                        <input type="hidden" name="keys_{{ $file['name'] }}[]" class="form-control" value="{{ $k }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                    <div class="clearfix"></div>
                                                                </div>

                                                            <input type="hidden" name="fileName[]" value="{{ $file['name'] }}">
                                                            <input type="hidden" name="lang" value="{{ $language->id }}">
                                                        
                                                        </div>
                                                        
                                                        <div class="col-xs-12">
                                                            <button type="lang_files_submit" class="btn bg-purple waves-effect lang_files_submit left">
                                                                <i class="material-icons">save</i>
                                                                <span>{{ trans('lang.save') }}</span>
                                                            </button>

                                                            <button type="lang_files_submit" class="btn bg-blue waves-effect lang_files_submit right" data-dismiss="modal">
                                                                <i class="material-icons">close</i>
                                                                <span>{{ trans('lang.close') }}</span>
                                                            </button>
                                                        </div>


                                                    {!! Form::close() !!}

                                                    </div>
                                                @endforeach
                                                </div>
                                                </div>
                                            </div>


                                        <div class="modal-footer">



                                        </div>
                                        </div>
                                    </div>
                                </div>

                             </td>

                             <td>{!! Btn::view($language->id) !!}</td>
                             <td>{!! Btn::edit($language->id) !!}</td>
                             <td>{!! Btn::delete($language->id,$language->trans('name')) !!}</td>
                             
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->



@endsection
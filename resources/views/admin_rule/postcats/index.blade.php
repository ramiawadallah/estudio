@extends('layouts.admin')
@section('title') {{ trans('lang.postcats') }}  @endsection
@section('content')

    

    <!-- END EXAMPLE TABLE PORTLET-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Post Category
                        <br>
                            <small>All Post Category</small>
                        <br>
                        {!! Btn::create() !!}
                    </h2>
                </div>
                <div class="body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable" width="100%">
                            <thead>
                                <tr>
                                     <th>{{ trans('lang.title') }}</th>
                                     <th>{{ trans('lang.stutes') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>{{ trans('lang.title') }}</th>
                                     <th>{{ trans('lang.stutes') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </tfoot>
                        <tbody>
                        @foreach($postcats as $postcat)
                        <tr>
                             

                             <td>{{ $postcat->trans('title') }}</td>

                             <td>{{ $postcat->trans('stutes') }}</td>

                             <td>{{ date('Y/m/d',strtotime($postcat->created_at)) }}</td>

                             <td>{!! Btn::view($postcat->id) !!}</td>

                             <td>{!! Btn::edit($postcat->id) !!}</td>

                             <td>{!! Btn::delete($postcat->id,$postcat->trans('name')) !!}</td>

                        </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <div>
    <div>


@endsection
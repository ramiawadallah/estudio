@extends('layouts.admin')
@section('title') {{ trans('lang.gallaries') }}  @endsection
@section('content')

    

    <!-- END EXAMPLE TABLE PORTLET-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Gallary  
                        <br>
                            <small>All Gallary </small>
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
                                     <th>{{ trans('lang.photo') }}</th>
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
                                     <th>{{ trans('lang.photo') }}</th>
                                     <th>{{ trans('lang.stutes') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </tfoot>
                        <tbody>
                        @foreach($gallaries as $gallary)
                        <tr>
                             

                             <td>{{ $gallary->trans('title') }}</td>

                             <td><img src="/uploads/{{ $gallary->photo }}" style="max-width:150px;"></td>

                             <td>{{ $gallary->trans('stutes') }}</td>

                             <td>{{ date('Y/m/d',strtotime($gallary->created_at)) }}</td>

                             <td>{!! Btn::view($gallary->id) !!}</td>

                             <td>{!! Btn::edit($gallary->id) !!}</td>

                             <td>{!! Btn::delete($gallary->id,$gallary->trans('name')) !!}</td>

                        </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <div>
    <div>


@endsection
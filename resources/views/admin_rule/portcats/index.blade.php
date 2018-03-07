@extends('layouts.admin')
@section('title') {{ trans('lang.portcats') }}  @endsection
@section('content')

    

    <!-- END EXAMPLE TABLE PORTLET-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Portfolio Category
                        <br>
                            <small>All Portfolio Category </small>
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
                                     <!-- <th>{{ trans('lang.photo') }}</th> -->
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
                                     <!-- <th>{{ trans('lang.photo') }}</th> -->
                                     <th>{{ trans('lang.stutes') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </tfoot>
                        <tbody>
                        @foreach($portcats as $portcat)
                        <tr>
                             

                             <td>{{ $portcat->trans('title') }}</td>

                             <!-- <td><img src="../public/uploads/{{ $portcat->photo }}" style="max-width:150px;"></td> -->

                             <td>{{ $portcat->trans('stutes') }}</td>

                             <td>{{ date('Y/m/d',strtotime($portcat->created_at)) }}</td>

                             <td>{!! Btn::view($portcat->id) !!}</td>

                             <td>{!! Btn::edit($portcat->id) !!}</td>

                             <td>{!! Btn::delete($portcat->id,$portcat->trans('name')) !!}</td>

                        </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <div>
    <div>


@endsection
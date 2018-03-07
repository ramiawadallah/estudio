@extends('layouts.admin')
@section('title') {{ trans('lang.users') }}  @endsection
@section('content')

    

    <!-- END EXAMPLE TABLE PORTLET-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Users  
                        <br>
                            <small>All Users </small>
                        <br>
                        {!! Btn::create() !!}
                    </h2>
                </div>
                <div class="body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable" width="100%">
                            <thead>
                                <tr>
                                     <th>{{ trans('lang.name') }}</th>
                                     <th>{{ trans('lang.email') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>{{ trans('lang.name') }}</th>
                                     <th>{{ trans('lang.email') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </tfoot>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                             

                             <td>{{ $user->trans('name') }}</td>
                             <td>{{ $user->trans('email') }}</td>

                             <td>{{ date('Y/m/d',strtotime($user->created_at)) }}</td>

                             <td>{!! Btn::view($user->id) !!}</td>

                             <td>{!! Btn::edit($user->id) !!}</td>

                             <td>{!! Btn::delete($user->id,$user->trans('name')) !!}</td>

                        </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <div>
    <div>


@endsection
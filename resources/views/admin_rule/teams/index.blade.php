@extends('layouts.admin')
@section('title') {{ trans('lang.teams') }}  @endsection
@section('content')

    

    <!-- END EXAMPLE TABLE PORTLET-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Team  
                        <br>
                            <small>All Team </small>
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
                        @foreach($teams as $team)
                        <tr>
                             

                             <td>{{ $team->trans('title') }}</td>

                             <td><img src="../public/uploads/{{ $team->photo }}" style="max-width:150px;"></td>

                             <td>{{ $team->trans('stutes') }}</td>

                             <td>{{ date('Y/m/d',strtotime($team->created_at)) }}</td>

                             <td>{!! Btn::view($team->id) !!}</td>

                             <td>{!! Btn::edit($team->id) !!}</td>

                             <td>{!! Btn::delete($team->id,$team->trans('name')) !!}</td>

                        </tr>
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        <div>
    <div>


@endsection
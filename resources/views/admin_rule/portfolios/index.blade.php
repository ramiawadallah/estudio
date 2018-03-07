@extends('layouts.admin')
@section('title') {{ trans('lang.portfolios') }}  @endsection
@section('content')

    

    <!-- END EXAMPLE TABLE PORTLET-->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Portfolio  
                        <br>
                            <small>All Portfolio </small>
                        <br>
                        {!! Btn::create() !!}
                    </h2>
                </div>
                <div class="body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover dataTable js-exportable" width="100%">
                            <thead>
                                <tr>
                                     <th>{{ trans('lang.photo') }}</th>
                                     <th>{{ trans('lang.stutes') }}</th>
                                     <th>{{ trans('lang.portcat') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>{{ trans('lang.photo') }}</th>
                                     <th>{{ trans('lang.stutes') }}</th>
                                     <th>{{ trans('lang.portcat') }}</th>
                                     <th>{{ trans('lang.createAt') }}</th>
                                     <th>{{ trans('lang.view') }}</th>
                                     <th>{{ trans('lang.edit') }}</th>
                                     <th>{{ trans('lang.delete') }}</th>
                                </tr>
                            </tfoot>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                        <tr>

                             <td><img src="../public/uploads/portfolio/{{ $portfolio->image }}" style="max-width:150px;"></td>

                             <td>{{ $portfolio->trans('stutes') }}</td>

                             <td>{{ $portfolio->port_id()->first()->title }}</td>

                             <td>{{ date('Y/m/d',strtotime($portfolio->created_at)) }}</td>

                             <td>{!! Btn::view($portfolio->id) !!}</td>

                             <td>{!! Btn::edit($portfolio->id) !!}</td>

                             <td>{!! Btn::delete($portfolio->id,$portfolio->trans('name')) !!}</td>
                        </tr>
                        @endforeach
                            
                        </tbody>
                    </table>

                    {{ $portfolios->links('layouts.pagination.default') }}

                </div>
            </div>
        <div>
    <div>


@endsection
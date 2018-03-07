@extends('layouts.admin')
@section('title') {{ trans('lang.pages') }}  @endsection
@section('content')
<!-- BEGIN EXAMPLE TABLE PORTLET-->


<!-- END EXAMPLE TABLE PORTLET-->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Pages
                    <br>
                    <small>All page</small>
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
                                 <th>{{ trans('lang.uri') }}</th>
                                 <th>{{ trans('lang.stutes') }}</th>
                                 <th>{{ trans('lang.created_at') }}</th>
                                 <th>{{ trans('lang.view') }}</th>
                                 <th>{{ trans('lang.edit') }}</th>
                                 <th>{{ trans('lang.delete') }}</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 <th>{{ trans('lang.name') }}</th>
                                 <th>{{ trans('lang.uri') }}</th>
                                 <th>{{ trans('lang.stutes') }}</th>
                                 <th>{{ trans('lang.created_at') }}</th>
                                 <th>{{ trans('lang.view') }}</th>
                                 <th>{{ trans('lang.edit') }}</th>
                                 <th>{{ trans('lang.delete') }}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                 <td>{{ $page->trans('title') }}</td>
                                 <td><a href="{{ url($page->uri)}}" >{{ $page->pretty_uri }}</a></td>
                                 <td>{{ $page->trans('stutes') }}</td>
                                 <td>{{ date('Y/m/d',strtotime($page->created_at)) }}</td>
                                 <td>
                                     {!! Btn::view($page->id) !!}
                                 </td>
                                 <td>
                                     {!! Btn::edit($page->id) !!}
                                 </td>
                                 <td>
                                     {!! Btn::delete($page->id,$page->trans('name')) !!}
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->      




@endsection
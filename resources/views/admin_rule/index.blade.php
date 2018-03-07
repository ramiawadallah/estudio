@extends('layouts.admin')
@section('title') {{ trans('lang.dashbord') }}  @endsection
@section('content')
	<!-- Profile Info and Notifications -->


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card">
	    <div class="header bg-blue-grey">
	        <h2>
	             Website Statuses
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

	    	<div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">people</i>
                        </div>
                        <div class="content">
                            <div class="text">Users</div>
                            <div class="number count-to" data-from="0" data-to="{{ App\User::count() }}" data-speed="15" data-fresh-interval="20">{{ App\User::count() }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="content">
                            <div class="text">Pages</div>
                            <div class="number count-to" data-from="0" data-to="{{ App\Page::count() }}" data-speed="1000" data-fresh-interval="20">{{ App\Page::count() }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">flag</i>
                        </div>
                        <div class="content">
                            <div class="text">Languages</div>
                            <div class="number count-to" data-from="0" data-to="{{ App\Lang::count() }}" data-speed="1000" data-fresh-interval="20">{{ App\Lang::count() }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">nature_people</i>
                        </div>
                        <div class="content">
                            <div class="text">VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">1225</div>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="card">
	    <div class="header bg-blue-grey">
	        <h2>
	             Online Users!
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
			<div class="table-responsive">
                <table class="table table-bordered table-hover dataTable js-exportable">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Online</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{ $user->name }} </td>
								<td>{{ $user->email }} </td>
								<td>@if($user->isOnline())<i class="material-icons bg-teal">flight_takeoff</i> Online @else <i class="material-icons bg-red">flight_land</i> Offline @endif() </td>
							</tr>	
						@endforeach()
					</tbody>
				</table>
			</div>
			{{ $users->links('layouts.pagination.pag') }}
		</div>
	</div>
</div>

@endsection()
@extends('layouts.auth')
@section('title') Login @endsection
@section('content')


<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);"><b>ESTUDIO</b> </a>
        <small>Login</small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="msg">Sign in to start your session</div>

                <div class="input-group"{{ $errors->first('email') }}>
                    <span class="input-group-addon">
                        <i class="material-icons">person</i>
                    </span>
                    <div class="form-line">
                        <input id="email" type="email" class="form-control" placeholder="{{ trans('lang.email') }}" name="email" value="{{ old('email') }}">
                    </div>
                    
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock</i>
                    </span>
                    <div class="form-line"{{ $errors->first('password') }}>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block" style="margin-left:-65px;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">{{ trans('lang.enter') }}</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <!-- <div class="col-xs-6">
                        <a href="sign-up.html">Register Now!</a>
                    </div> -->
                    <div class="col-xs-12 align-right">
                        <a href="{{ url('/password/reset') }}">{{ trans('lang.no_worries') }} {{ trans('lang.to_reset_your_password') }}?</a>
                    </div>
                </div>

                <br>
                @if ($errors->has('email'))
                    <div class="alert bg-pink">
                       {{ $errors->first('email') }}
                    </div>
                @endif

            </form>
        </div>
    </div>
    <div class="logo">
        <a  style="color: rgba(250,250,250,.9); font-size: 18px; " href="http://ramiawadallah.com" target="_new"> <b>By</b> Rami Awadallah</a>
    </div>
</div>






@endsection()






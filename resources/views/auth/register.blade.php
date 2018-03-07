@extends('layouts.auth')
@section('title') Regestration @endsection
@section('content')

<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);"><b>ESTUDIO</b> </a>
        <small></small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_up" method="POST">

                <div class="msg">Register a new membership</div>

                         <form  role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group"{{ $errors->has('name') ? ' has-error' : '' }}>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="form-line">
                                    <input placeholder="Full name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            @if ($errors->has('name'))
                                <span class="alert bg-pink">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group"{{ $errors->has('email') ? ' has-error' : '' }}>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </div>
                                <div class="form-line">
                                    <input placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            @if ($errors->has('email'))
                                <span class="alert bg-pink">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group"{{ $errors->has('phone') ? ' has-error' : '' }}>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="material-icons">phone</i>
                                </div>
                                <div class="form-line">
                                    <input placeholder="Phone Number" type="phone" class="form-control" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>
                            @if ($errors->has('phone'))
                                <span class="alert bg-pink">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>


                        <div class="form-group"{{ $errors->has('password') ? ' has-error' : '' }}>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </div>
                                <div class="form-line">
                                    <input placeholder="Password" type="password" class="form-control" name="password" value="{{ old('password') }}">
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <span class="alert bg-pink">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group"{{ $errors->has('password_confirmation') ? 'has-error' : '' }}>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </div>
                                <div class="form-line">
                                    <input placeholder="Password Confirmation" type="password" class="form-control" name="password_confirmation">
                                </div>  
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="alert bg-pink" style="margin-left:-85px;">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>


                        <!-- <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                            <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                        </div> -->

                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                        <div class="m-t-25 m-b--5 align-center">
                            <a href="{{ url('login') }}">You already have a membership?</a>
                        </div>
            </form>
        </div>
    </div>
     <div class="logo">
        <a  style="color: rgba(250,250,250,.9); font-size: 18px; " href="http://ramiawadallah.com" target="_new"> <b>By</b> Rami Awadallah</a>
    </div>
</div>


@endsection
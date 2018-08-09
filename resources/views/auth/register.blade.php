@extends('common.layout')

@section('header_title', 'Register')
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">
@endsection

@include('common.head')

@include('common.header')

@section('content')
    <main>
        <div class="container" id="form1" onsubmit="doForm(event);" novalidate>
            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name"><h3>Name</h3></label>
                            <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ old('name') }}" aria-describedby="name-tip" required autofocus>
                            <small id="name-tip" class="form-text text-muted">Please type your name.</small>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email"><h3>Email</h3></label>
                            <input type="email" class="form-control" id="email" placeholder="mail address" name="email" value="{{ old('email') }}" aria-describedby="email-tip" required>
                            <small id="email-tip" class="form-text text-muted">Please type your mail address.</small>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password"><h3>Password</h3></label>
                            <input type="password" class="form-control" id="password" placeholder="password" name="password" aria-describedby="password-tip" required>
                            <small id="password-tip" class="form-text text-muted">Please type your password.</small>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"><h3>Confirm Password</h3></label>
                            <input id="password-confirm" type="password" class="form-control" placeholder="password" name="password_confirmation" aria-describedby="password-confirm-tip" required>
                            <small id="password-confirm-tip" class="form-text text-muted">Please type your password again.</small>
                        </div>

                        <div class="form-group">
                            <label for="birthday"><h3>Birthday</h3></label>
                            <input type="date" class="form-control" id="birthday" aria-describedby="birthday-tip" required>
                            <small id="birthday-tip" class="form-text text-muted">Please type your birthday.</small>
                        </div>

                        <div class="form-group" id="gender_radio">
                            <h3>Gender</h3>
                            <div class="form-check" id="man">
                                <label class="form-check-label"  aria-describedby="gender-tip">
                                    <input type="radio" class="form-check-input" name="radio">Man
                                </label>
                            </div>
                            <div class="form-check" id="woman">
                                <label class="form-check-label"  aria-describedby="gender-tip">
                                    <input type="radio" class="form-check-input" name="radio">Woman
                                </label>
                            </div>
                            <small id="gender-tip" class="form-text text-muted">Please check your gender.</small>
                        </div>

                        <div class="form-group">
                            <label for="inquiry"><h3>Memo</h3></label>
                            <textarea class="form-control" id="inquiry" rows="5" aria-describedby="textarea-tip" name="inquiry"></textarea>
                            <small id="textarea-tip" class="form-text text-muted">Anything you would like to say?</small>
                        </div>
                        <!--<div class="form-group">-->
                        <!--<input type="submit" class="btn" value="send">-->
                        <!--</div>-->
                        {{--<div class="text-center">--}}
                            {{--<button type="submit" class="btn btn-lg btn-dark" data-toggle="collapse" data-target="#form_collapse" aria-expanded="false" aria-controls="form_collapse" >Send</button>--}}
                            {{--<div class="modal fade" id="dialog1">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-dark" id="send_btn">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" id="">
                    {{--right side--}}
                </div>
                {{--<div class="col-lg-6" id="profile_confirmation">--}}
                    {{--<div class="collapse" id="form_collapse">--}}
                        {{--<form method="post" action="#">--}}
                            {{--<div class="form-group">--}}
                                {{--<p>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}
                                    {{--Submit content.Submit content.Submit content.Submit content.Submit content.<br>--}}

                                {{--</p>--}}
                                {{--<button type="submit" class="btn btn-lg btn-dark" id="send_btn" data-toggle="modal" data-target="#dialog1">send</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </main>
@endsection


@section('pageJs')

@endsection

@include('common.footer')

{{--ここから下デフォルト--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

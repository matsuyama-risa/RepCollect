@extends('common.layout')

@section('header_title', 'Contact')
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
@endsection

@include('common.head')

@include('common.header')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form method="post" action="#">
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

                        <div class="form-group">
                            <label for="inquiry"><h3>The inquiry is as follows</h3></label>
                            <textarea class="form-control" id="inquiry" rows="10" aria-describedby="textarea-tip" required></textarea>
                            <small id="textarea-tip" class="form-text text-muted">Please type your inquiry.</small>
                        </div>
                        <!--<div class="form-group">-->
                        <!--<input type="submit" class="btn" value="send">-->
                        <!--</div>-->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-dark" onclick="send()" data-toggle="collapse" data-target="#form_collapse" aria-expanded="false" aria-controls="form_collapse" >Send</button>
                        </div>
                </form>
            </div>
                {{--<div class="col-lg-6" id="contact_confirmation">--}}
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
                                {{--<input type="submit" class="btn btn-lg btn-dark" value="send" id="send_btn">--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>
    </main>
@endsection


@section('pageJs')
    <script>
        function send() {
            alert("処理は書いてない");
        }
    </script>
@endsection

@include('common.footer')
@extends('common.layout')

@section('header_title', 'Profile')
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
@endsection

@include('common.head')

@include('common.header')

@section('content')
    @if(Auth::user())
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body text-center">
                        <div class="login-box-body">
                            <table class="table table-bordered account_info">
                                <tr>
                                    <th>Name</th>
                                    <td>{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th>EMail</th>
                                    <td colspan="2">{{ Auth::user()->email }}</td>
                                </tr>
                            </table>

                            <a href="" class="btn btn-primary">　　&nbsp;名前を変更する&nbsp;　　</a><br><br>
                            <a href="" class="btn btn-primary">メールアドレスを変更する</a><br><br>
                            <a href="" class="btn btn-default">　パスワードを変更する　</a>

                        </div><!-- /.login-box-body -->

                    </div>
                </div>
            </div>
        </div>
    @else
        <a href="{{ route('login') }}" class="list-group-item">
           Login
        </a>
        <a href="{{ route('register') }}" class="list-group-item">
            Register
        </a>
    @endif
@endsection


@section('pageJs')

@endsection

@include('common.footer')
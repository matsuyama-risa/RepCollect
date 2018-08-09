@extends('common.layout')

@section('title', 'TOP')

@section('pageCss')
    <link rel="stylesheet" href="{{ url('/css/top.css') }}">
@endsection

@include('common.head')

@section('header_title', 'TOP')

@include('common.header')

@section('content')

    <main>
        <div class="container">
            <div class="row" id="info">
                <!--重要なインフォメーションがあれば-->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div id="top_menu">
                        <h1 class="top_title">Menu</h1>
                        <nav class="nav flex-column border border-dark p-1" id="top_menu_link">

                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Breed/Species</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Species</a> </li>
                                    <li><a href="#">Feed</a> </li>
                                    <li><a href="#">Flooring</a> </li>
                                    <li><a href="#">Feed</a> </li>
                                    <li><a href="#">Cage</a> </li>
                                    <li><a href="#">Light</a> </li>
                                    <li><a href="#">Cleaning</a> </li>
                                    <li><a href="#">etc</a> </li>
                                </ul>
                            </div>

                            <a class="nav-link" href="#">Shop</a>
                            <a class="nav-link" href="#">Hospital</a>
                            <a class="nav-link" href="#">ReptilesCafe</a>
                            <a class="nav-link" href="#">GoodsShop</a>

                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Media</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Books</a> </li>
                                    <li><a href="#">TV</a> </li>
                                    <li><a href="#">etc</a> </li>
                                </ul>
                            </div>

                            @if(Auth::user())
                                <a class="nav-link" href="#">AlternatingCurrent</a>
                                <a class="nav-link" href="#">FosterParent</a>
                                <a class="nav-link" href="{{route('profile')}}">Profile</a>
                            @else
                                <a class="nav-link" href="{{route('register')}}">Register</a>
                                <a class="nav-link" href="{{route('login')}}">AlternatingCurrent</a>
                                <a class="nav-link" href="{{route('login')}}">FosterParent</a>
                            @endif

                        </nav>
                    </div>

                    <div id="loginout">
                        <button class="btn btn-lg btn-dark" id="login">
                            <a href="{{route('login')}}">Login</a>
                        </button>
                        <button class="btn btn-lg btn-dark" id="login">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </button>
                    </div>

                    <div id="hoge_img">

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">
                    <div id="top_new">
                        <div class="top_title">
                            <h2>News</h2>
                        </div>
                        <div class="border border-dark p-1">
                            <nav id="navbar_top_new" class="navbar navbar-light">
                                <ul class="nav nav-pill">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#start">Start</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#end">End</a>
                                    </li>
                                </ul>
                            </nav>
                            <div data-spy="scroll" data-target="#navbar_top_new" data-offset="0" class="scrollspy-frame">
                                <h6 id="start" class="display-4"><a href="#">New Title</a><span class="badge">New</span></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 class="display-4"><a href="#">New Title</a><span class="badge">New</span></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 class="display-4"><a href="#">New Title</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 class="display-4"><a href="#">New Title</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                                <h6 id="end" class="display-4"><a href="#">New Title</a></h6>
                                <p>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                    this is sample content.this is sample content.this is sample content.<br>
                                </p>
                                <hr>

                            </div>
                        </div>
                        <div id="hoge">

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div id="top_event">

                        <div class="top_title">
                            <h2>Event<a href="{{route('event')}}"><span class="badge badge-pill">more</span></a> </h2>
                        </div>
                        <div id="top_event_text">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <th>6/3</th>
                                    <td><a href="#">九州レプタイルフェスタ</a></td>
                                    <td>/ Fukuoka</td>
                                </tr>
                                <tr>
                                    <th>6/10</th>
                                    <td><a href="#">BLACK OUT!</a></td>
                                    <td>/ Tokyo</td>
                                </tr>
                                <tr>
                                    <th>6/24</th>
                                    <td><a href="#">アンペポ</a></td>
                                    <td>/ Niigata</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <hr>

                    <div id="top_movie">
                        <div class="top_title">
                            <h2>Movie</h2>
                        </div>
                        <div id="top_movie_movie">
                            <iframe src="https://www.youtube.com/embed/xodVcgJ8bc0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div id="top_movie_text">
                            <p>
                                this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div id="content">
                <div id="demo" style="left: -50px">
                    <img src="{{asset('img/4.gif')}}">
                </div>
            </div>
        </div>
    </main>



@endsection

@section('pageJs')
    <script>
        $(function () {
            setTimeout('demo()');
        });

        function demo() {
            $("#demo").animate({
                left: "100%"
            }, 15000).animate({
                left: "-50px"
            }, 0)
            setTimeout("demo()", 15000);
        }

    </script>
@endsection

@include('common.footer')
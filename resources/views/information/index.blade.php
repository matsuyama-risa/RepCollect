@extends('common.layout')

@section('header_title', 'Information')
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('/css/information.css') }}">
@endsection

@include('common.head')

@include('common.header')

@section('content')
    <main class="container">
        <!--<div class="tr">-->
        <div class="content">

            <div class="row" id="emp">
                <!--余白-->
            </div>

            <div class="row" id="foldscroll_content">
                <div class="col-lg-7" id="information_cards">
                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a><span class="badge badge-pill">New</span>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('event')}}">Event(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a><span class="badge badge-pill">New</span>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('about')}}">About(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('profile')}}">Profile(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">FosterParent(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Media(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('event')}}">Event(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('event')}}">Event(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('about')}}">About(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('profile')}}">Profile(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">FosterParent(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#">Media(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-transparent">
                        <h4 class="card-header">
                            <a href="#">Information Title</a>
                        </h4>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{route('event')}}">Event(card-title)</a>
                            </h5>
                            <p class="card-text">
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.<br>
                                this is sample content.this is sample content.this is sample content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12">

                    <div class="demo"></div>

                </div>


            </div>

            <!--</div>-->
        </div>


    </main>
@endsection


@section('pageJs')
    <script src="{{ asset('/js/foldscroll.js') }}"></script>
    <script src="{{ asset('/js/quotes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.scrollpath.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/snowfall.jquery.min.js') }}"></script>
    <script>
        $( '#information_cards' ).foldscroll({

            perspective: 900,
            shading: 'rgba(0,0,0,0.3)',
            margin: '350px'
        });
    </script>

    <script>


        $(document).ready(function(){
            $(document).snowfall({
                image : "img/demo2.png",
                flakeCount :45,
                maxSpeed   : 2,
                minSpeed   : 1,
                maxSize    : 50,
                minSize    : 10,
                shadow	   : false
            });
        });

    </script>
@endsection

@include('common.footer')
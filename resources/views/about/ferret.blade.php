@extends('common.layout')

@section('header_title', 'Ferret')
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('/css/about_ferret.css') }}">
@endsection

@include('common.head')

@include('common.header')

@section('content')
    <main class="container">
        <!--<div class="tr">-->
        <div class="content">
            <div class="row m-3">
                <div class="col-sm-12">
                    <figure class="media">
                        <div class="ferretimg">
                            <img class="mr-3 img-fluid img-thumbnail rounded-circle" src="{{asset('img/ferret1.jpg')}}">
                        </div>

                        <div class="media-body">
                            <h5 class="text-capitalize">Profile</h5>
                            <table class="table">
                                <!--<thead>Profile</thead>-->
                                <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>Mel</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>♂</td>
                                </tr>
                                <tr>
                                    <th>Farm</th>
                                    <td>Holden(Canada)</td>
                                </tr>
                                <tr>
                                    <th>Variety</th>
                                    <td>SilverMitt</td>
                                </tr>
                                <tr>
                                    <th>Birthday</th>
                                    <td>2017/5/25</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </figure>
                    <hr class="m-3">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="text-capitalize">About</h5>
                            <table class="table">
                                <!--<thead>About</thead>-->
                                <tbody>
                                <tr>
                                    <th>Cage</th>
                                    <td>
                                        Malcan FerretLivingRoomKit　Charcoal<br>
                                        size: W690×D445×H650mm
                                    </td>
                                </tr>
                                <tr>
                                    <th>Food</th>
                                    <td>
                                        JapanPremiam AllStage<br>
                                        Sheppard&Grrene AdultFurmular<br>
                                        RoyalCanan DIABETIC(CatFood)
                                    </td>
                                </tr>
                                <tr>
                                    <th>Favorite Toy</th>
                                    <td>Setaria, Thru-way</td>
                                </tr>
                                <tr>
                                    <th>Blog</th>
                                    <td><a href="#">hogehoge@</a> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="ferretimg">
                            <img class="mr-3 img-fluid img-thumbnail rounded-circle ferretimg" src="{{asset('img/ferret7.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-auto " id="about_ferret_carousel">
                    <div id="controllers" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/ferret6.jpg')}}" class="d-block" alt="first">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/ferret8.jpg')}}" class="d-block" alt="second">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/ferret5.jpg')}}" class="d-block" alt="third">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/ferret4.jpg')}}" class="d-block" alt="fourth">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#controllers" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#controllers" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="ml-2">
                    <div class="return">
                        <a href="{{route('about')}}"><img src="{{asset('img/icon_15.png')}}" id="return_img"></a>
                    </div>
                </div>
            </div>
        </div>

        <!--</div>-->


    </main>
@endsection


@section('pageJs')
    <script type="text/javascript" src="{{ asset('/js/snowfall.jquery.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(document).snowfall({
                image : "{{asset('img/star3.png')}}",
                flakeCount :50,
                maxSpeed   : 2,
                minSpeed   : 1,
                maxSize    : 60,
                minSize    : 10,
                shadow	   : false
            });
        });
    </script>
@endsection

@include('common.footer')
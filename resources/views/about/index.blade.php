@extends('common.layout')

@section('header_title', 'About')
@section('pageCss')
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
@endsection

@include('common.head')

@include('common.header')

@section('content')
    <main>
        <div class="tr">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto" id="about_profile">
                        <div id="about_profile_img">
                            <img class="img-fluid img-thumbnail rounded-circle" src="{{asset('img/lizard2.jpg')}}" alt="aboutプロフィール画像">
                        </div>
                        <div id="about_profile_text">
                            <dl>
                                <dt>Name </dt>
                                <dd>Hogeyama Hogeko</dd>

                                <dt>Gender </dt>
                                <dd>♀</dd>

                                <dt>pet</dt>
                                <dd>Ferret, Horned lizard, Leopard gecho etc </dd>

                                <dt>Coment </dt>
                                <dd>hogehoge〜</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row" id="about_pet">
                    <div class="col-lg-3 col-sm-6 about_pet_text">
                        <div id="about_ferret_img" class="about_pet_link">
                            <img src="{{asset('img/ferret1.jpg')}}" class="img-fluid img-thumbnail rounded-circle about_pet_img" alt="aboutフェレット画像">
                            <div class="mask1"></div>
                            <div class="mask2"></div>
                            <div class="caption">
                                <a href="{{url('/about/ferret')}}"><p>Link!</p></a>
                            </div>
                        </div>
                        <div id="about_ferret_text">
                            <p>Ferret</p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6 about_pet_text">
                        <div id="about_hornedlizard_img" class="about_pet_link">
                            <img src="{{asset('img/lizard3.jpg')}}" class="img-fluid img-thumbnail rounded-circle about_pet_img" alt="aboutサバクツノトカゲ 画像">
                            <div class="mask1"></div>
                            <div class="mask2"></div>
                            <div class="caption">
                                <a href="#"><p>Link!</p></a>
                            </div>
                        </div>
                        <div id="about_hornedlizard_text">
                            <p>Horned lizard</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 about_pet_text">
                        <div id="about_leopa_img" class="about_pet_link">
                            <img src="{{asset('img/leopa7.jpg')}}" class="img-fluid img-thumbnail rounded-circle about_pet_img" alt="aboutレオパ画像">
                            <div class="mask1"></div>
                            <div class="mask2"></div>
                            <div class="caption">
                                <a href="#"><p>Link!</p></a>
                            </div>
                        </div>
                        <div id="about_leopa_text">
                            <p>Leopard gecho</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 about_pet_text">
                        <div id="about_aqua_img" class="about_pet_link">
                            <img src="{{ asset('img/aqua2.jpg') }}" class="img-fluid img-thumbnail rounded-circle about_pet_img" alt="about熱帯魚画像">
                            <div class="mask1"></div>
                            <div class="mask2"></div>
                            <div class="caption">
                                <a href="#"><p>Link!</p></a>
                            </div>
                        </div>
                        <div id="about_aqua_text">
                            <p>Aqua</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('js/jquery.morphing.js') }}"></script>

    </main>
@endsection


@section('pageJs')
    <script>
        $(function(){
            let $hoge = $('#about_profile_img');
            $hoge.morphing({
                numVert: 10,
                spring: 0.007,
                friction: 0.9,
                radius: 200,
                fps: 90
            });
        });
    </script>
@endsection

@include('common.footer')
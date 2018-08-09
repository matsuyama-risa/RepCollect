<!DOCTYPE html>
<html lang=ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script   src="{{url('https://code.jquery.com/jquery-3.3.1.js')}}"   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="   crossorigin="anonymous"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')}}" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js')}}" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href="{{url('https://fonts.googleapis.com/css?family=Bitter:400,700')}}" rel="stylesheet">
    <link href="{{ asset('/css/fixed-positioning.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet" type="text/css" />
</head>


<body>

<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:-500px -10000px;"></div>
<div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:-500px -8000px;"></div>
<div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:-500px -6000px;"></div>

<div id="progress" data-0="width:0%;background:hsl(200, 20%, 70%);" data-end="width:100%;background:hsl(920, 20%, 70%);"></div>

<div id="intro" style="padding: 0" data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
    <div id="hometitle_logo">
        <img class="img-fluid" src="{{asset('img/logo/logo_ex.png')}}">
    </div>
    <a href="{{route('top')}}"><button role="button" href="top.html" class="btn badge-pill" style="font-size: 28px;width: 200px">Skip </button></a>
    <h2 style="font-weight: bold">Please Scroll!!</h2>
    <p class="arrows" style="color: #444444;">▼&nbsp;▼&nbsp;▼</p>
    <div class="wave" style="height: 150px;width: 100%;margin: 0;padding: 0;opacity: 0.8; border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;"></div>
</div>

<div id="transform" data-500="transform:scale(0) rotate(0deg);" data-1000="transform:scale(1) rotate(1440deg);opacity:1;" data-1600="" data-1700="transform:scale(5) rotate(3240deg);opacity:0;">
    <h2>After a while, crocodile.</h2>
    <p>
        See you soon, raccoon.Give a hug, ladybug.Blow a kiss, goldfish.<br>
        Take care, polar bear.Out the door, dinosaur.Bye bye, butterfly.
    </p>
</div>

<div id="properties" data-1700="top:100%;" data-2200="top:0%;" data-3000="display:block;" data-3700="top:-100%;display:none;">
    <h2>Easy-peasy lemon squeezy.</h2>
    <p>What’s the deal, banana peel ?Do you know what I mean, jellybean ?</p>
</div>

<div id="easing_wrapper" data-0="display:none;" data-3900="display:block;" data-4900="background:rgba(0,0,0,0);color[swing]:rgb(0,0,0);" data-5900="background:rgba(0,0,0,0.7);color:rgb(255,255,255);" data-10000="top:0%;" data-12000="top:-100%;">
    <div id="easing" data-3900="left:100%" data-4600="left:25%;">
        <h2>What’s Your Name ?</h2>
        <p>Mary Jane.</p>
        <p>Where do you live ? <span data-3900="" data-4900="color[swing]:rgb(0,0,0);" data-5900="color:rgb(176, 216, 230);">Down the drain</span>. What’s your number ? Cucumber</p>
        <p data-5900="opacity:0;font-size:100%;" data-6500="opacity:1;font-size:150%;">I’m the boss, applesauce. Understand, rubberband?</p>
    </div>

    <div class="drop" data-6500="left:5%;bottom:100%;" data-9500="bottom:0%;">R</div>
    <div class="drop" data-6500="left:15%;bottom[bounce]:100%;" data-9500="bottom:0%;">E</div>
    <div class="drop" data-6500="left:25%;bottom[quadratic]:100%;" data-9500="bottom:0%;">P</div>
    <div class="drop" data-6500="left:35%;bottom[cubic]:100%;" data-9500="bottom:0%;">T</div>
    <div class="drop" data-6500="left:45%;bottom[swing]:100%;" data-9500="bottom:0%;">I</div>
    <div class="drop" data-6500="left:55%;bottom[WTF]:100%;" data-9500="bottom:0%;">L</div>
    <div class="drop" data-6500="left:65%;bottom[inverted]:100%;" data-9500="bottom:0%;">E</div>
    <div class="drop" data-6500="left:75%;bottom[bounce]:100%;" data-9500="bottom:0%;">S</div>
    <div class="drop" data-6500="left:85%;bottom[swing]:100%;" data-9500="bottom:0%;">!</div>
</div>

<div id="download" data-10000="top[cubic]:100%;border-radius[cubic]:0em;border-width:0px;" data-12000="top:10%;border-radius:2em;border-width:4px;">
    <div id="home_download_logo">
        <img class="img-fluid" src="{{asset('img/logo/logo_ex.png')}}" style="height: 100px;">
    </div>
    <h1>Rep Collect</h1>
    <h2><a href="{{route('top')}}">Enter<span class="badge badge-pill" id="home_download_badge">Click!</span> </a> </h2>
    <p>
        this is sample content.this is sample content.this is sample content.<br>
        this is sample content.this is sample content.this is sample content.
    </p>
</div>


<div id="scrollbar" data-0="top:0%;margin-top:2px;" data-end="top:100%;margin-top:-52px;"></div>

<script type="text/javascript" src="{{asset('js/skrollr.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/raindrops.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.ripples.js')}}"></script>

</body>

<script>
    var s = skrollr.init({
        edgeStrategy: 'set',
        easing: {
            WTF: Math.random,
            inverted: function(p) {
                return 1-p;
            }
        }
    });

</script>

<script>
    $(function(){
        let $hoge = $('.wave');
        $hoge.raindrops({
            color:'#fff',
            waveHeight: 200,
            density: 0.1,
            frequency: 20,
            canvasHeight:200
        });
    });
</script>

<script>
    $('body').ripples({
        resolution: 512,
        dropRadius: 20,
        perturbance: 0.04,
    });
</script>

</html>
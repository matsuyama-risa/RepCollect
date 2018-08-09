@section('header')

    <div class="container">
        <div class="row" id="title">
            <div class="col-auto mr-auto">
                <h1>
                    @yield('header_title')
                </h1>
            </div>
            <div class="col-auto ml-auto">
                <a href="{{route('home')}}"><img class="img-fluid" src="{{asset('img/logo/logo_ex.png')}}" alt="titlelogo"></a>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark">
        <button class="navbar-toggler text-light bg-dark" type="button" data-toggle="collapse" data-target="#collapse-items">
            Index
        </button>
        <div class="collapse navbar-collapse" id="collapse-items">
            <ul class="navbar-nav" id="collapse-items_ul">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="{{route('top')}}">Top</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('information')}}">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{'contact'}}">Contact</a>
                </li>
                <!--<li class="nav-item" id="find">-->
                <!--<form class="form-inline">-->
                <!--<input class="form-control mr-2" type="text" placeholder="find">-->
                <!--<button class="btn btn-outline-light">Find</button>-->
                <!--</form>-->
                <!--</li>-->
            </ul>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container-fluid" >
            <p><img class="img-fluid" src="{{asset('img/logo/logo_ex.png')}}" alt="topHeaderLogo" ></p>

        </div>
    </header>

@endsection
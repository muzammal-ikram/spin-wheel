<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="main.css" type="text/css" />
    <script src="{{ asset('js/wheel.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

   
   
</head>
<body style="background-color: #f5f5f5;">
    <div style="width:100%;background-color:white;">
      <div class="container navbar-light">
          <nav class="navbar navbar-expand-lg ">
          
          <a class="navbar-brand"  href="/" style="cursor: pointer; color:black;">WheelDecidePro</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto " >
                      <li class="nav-item" >
                          <!-- <router-link to="/" style="cursor: pointer; color:black;">Wheel Decide</router-link> -->
                      
                          <a class="nav-link"  href="/" style="cursor: pointer; color:black;">Wheel Decide</a>
                      </li>
                      <li class="nav-item" >
                          <!-- <router-link to="/yes-no" style="cursor: pointer; color:black;"> Yes No</router-link> -->
                          <a class="nav-link"  href="/yes-no" style="cursor: pointer; color:black;">Yes or No Wheel </a>
                      </li>
                      <li class="nav-item">
                              <a class="nav-link"  href="/blog" style="cursor: pointer; color:black;">Blog</a>
                      </li>   
                      </ul>
          </div>
          </nav>
      </div>
  </div> 
    <div id="app">
        @yield('content')
    </div>
</body>
</html>

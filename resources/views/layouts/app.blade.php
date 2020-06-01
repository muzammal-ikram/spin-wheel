<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>WheelDecidePro</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

     
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="main.css" type="text/css" /> 

    <style>
        .heading{
        color:#223c56; font-family: Roboto,Helvetica,Arial,sans-serif; font-weight: bold;
    }
    .card_custom{
        background-color: #f5f5f5; border: none;
    }
    .h3{
        font-size: 24px;color: #223c56;font-weight: 700;
    }

    .h4{
        font-size: 20px;color: #223c56;font-weight: 700;
    }
    .p{
        color:#223c56; font-family:Roboto,Helvetica,Arial,sans-serif;font-weight: 400;padding-top: 10px;
    }
    @media only screen and (min-width:980px){
        .container-fluid {
            width: 80%;
        }
    }
    </style>
   
   
</head>
<body style="background-color: #f5f5f5;">
   
    <div style="width:100%;background-color:white;">
      <div class="container navbar-light">
          {{-- <nav class="navbar navbar-expand-lg ">
          
          <a class="navbar-brand"  href="/" style="cursor: pointer; color:black;">WheelDecidePro</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="navbar" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto " >
                      <li class="nav-item" >
                         
                          <a class="nav-link"  href="/" style="cursor: pointer; color:black;">Wheel Decide</a>
                      </li>
                      <li class="nav-item" >
                          <a class="nav-link"  href="/yes-no" style="cursor: pointer; color:black;">Yes or No Wheel </a>
                      </li>
                      <li class="nav-item">
                              <a class="nav-link"  href="/blog" style="cursor: pointer; color:black;">Blog</a>
                      </li>   
                      </ul>
          </div>
          </nav> --}}

<nav class="navbar navbar-expand-sm ">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="/">WheelDecidePro</a>
    
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">Wheel Decide</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/yes-no">Yes or No Wheel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog">Blog</a>
      </li>
    </ul>
  </nav>
  
      </div>
  </div> 
    <div id="app">
        @yield('content')
    </div>

    
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
  
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Wheel Decide Pro</h5>
          <p>Wheel Decide is an innovative tool and it is fast and easy to create. It is up to the users how effectively they use it.</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
  
          <ul class="list-unstyled">
            <li>
              <router-link class="nav-link"  to="/" style="color:black;">Privacy Policy</router-link>

            </li>
            <li>
             <router-link class="nav-link"  to="/" style="color:black;">Term And Conditions</router-link>
            
            </li>
            <li>
             <router-link class="nav-link"  to="/contact-us" style="color:black;">Contact Us</router-link>
            </li>  
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
   
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  </footer>
  <!-- Footer -->
</body>
</html>

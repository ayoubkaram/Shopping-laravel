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

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper black">
          <a href="#" class="brand-logo right">SHOP</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="{{route('home')}}">Home</a></li>

            <li><a href="badges.html">Sign In</a></li>
            <li><a href="collapsible.html">Sign Up</a></li>
            <li><a href="{{ route('cart.list') }}" class="flex items-center ">panier </a></li>


            <li><a href="{{ route('cart.list') }}" class="waves-effect waves-light btn"><i class="material-icons left">add_shopping_cart</i>{{ Cart::getTotalQuantity()}}</a>

            </li>
          </ul>
        </div>
      </nav>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/app.js"></script>
  <div class="container ">

    @yield('content')

   </div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Fasthand&family=Indie+Flower&family=Lobster&family=Playfair+Display:ital@0;1&family=Poppins:wght@100&family=Raleway:ital@1&family=Roboto+Mono:ital,wght@0,100;0,200;1,100;1,200&display=swap" rel="stylesheet">
       
        <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body class="antialiased">
        <div class="container-fluid w-login">
        <div class=" " style="  height: 70%;">
            <div class=" login">
            @if (Route::has('login'))
          
                <div class="dropdown   h-10 ">
                <button class=" b-login me-4 rounded dropdown-toggle " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                 user
                </button>


            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton2" style="  width: 253px;">
            @auth
                  <li> <a href="{{ url('/dashboard') }}" class=" dropdown-item font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a></li>
                    @else
                    <li><a href="{{ route('login') }}" class="dropdown-item font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                 <li> <a href="{{ route('register') }}" class="dropdown-item font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
        </ul>
       
                   

            <div class="">
            @if (Route::has('admin.login'))
               
                <div class="dropdown h-10 ">
                <button class=" b-login rounded  dropdown-toggle" type="button" id="admin" data-bs-toggle="dropdown" aria-expanded="false">
                 admin
                </button>
                <ul class="dropdown-menu " aria-labelledby="admin" style="  width: 253px;">

                    @auth
                    <li> <a href="{{ url('/admin/dashboard') }}" class="dropdown-item font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">admin Dashboard</a></li>
                    @else
                    <li> <a href="{{ route('admin.login') }}" class="dropdown-item font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">admin Log in</a></li>

                        @if (Route::has('admin.register'))
                    <li><a href="{{ route('admin.register') }}" class="dropdown-item font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">admin Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
          </ul>
     
        </div>
        </div>
        <div class="fs-2 text-center  Text-login">HOTALE</div>
        <img class="img-login d-block "  src="{{url('imgs/66.png')}}"/>

     
        </div>
      
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>

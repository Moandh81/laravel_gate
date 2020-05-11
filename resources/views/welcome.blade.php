<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
        
    </head>
    <body >

        <div id="app">


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  {{--  <a class="nav-link" href="#">Example <span class="sr-only">(current)</span></a>  --}}
                  <router-link to="/example" class='nav-link'>Example</router-link>

                </li>
                <li class="nav-item">
                  {{--  <a class="nav-link" href="#">Home</a>  --}}
                  <router-link to="/custom" class="nav-link">Custom</router-link>

                </li>
               
             
              </ul>
         
            </div>
          </nav>



        <div class="flex-center position-ref full-height">
            {{--  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif  --}}

            <div class="container">
                {{--  <div class="title m-b-md">
                    Laravel


                </div>  --}}

                  

                    

                    <router-view></router-view>


                </div>    



               
            </div>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

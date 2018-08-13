<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('styles')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>

    <link href='https://fonts.googleapis.com/css?family=Bad Script' rel='stylesheet'>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">------>
</head>
<style>
    .blog {
        font-family: serif;
        font-size: 90px;
    }
</style>

        <!-- Styles -->
           
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="w3-display-topright links w3-margin-right w3-margin-top w3-text-cyan">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}" class=" btn w3-button w3-round">Home</a>
                    @else
                        <a href="{{ url('/login') }}" class="btn w3-button w3-round">Login</a>
                        <a href="{{ url('/register') }}" class="btn w3-button w3-round">Register</a>
                    @endif
                </div>
            @endif

            <div class="blog w3-container w3-display-middle">
                <div class="title m-b-md">
                   <p class="w3-jumbo w3-animate-zoom"> My Blog </p>
                </div>
            </div> 
        </div>
    </body>
</html>

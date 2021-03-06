<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Device Manager</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">
         <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
    </head>
    <body>

        <main class="main-content">
            <div class="container">
                @yield('content')
            </div>

        </main>

    	 @stack('login')
       @stack('register')



        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/init.js')}}"></script>


    </body>
</html>

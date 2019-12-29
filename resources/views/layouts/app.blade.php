<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>{{config('app.name')}}</title>
  
    </head>
    <body>
        @include('inc.navbar')
       <div class="container mt-2">
           @include('inc.messages')
            @yield('content') 
       </div>
       <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

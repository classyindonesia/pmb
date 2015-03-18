<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_web', env('JUDUL_APP'))</title>

 

<script src="{{ elixir("js/main.js") }}"></script> 
<link rel="stylesheet" href="{{ elixir("css/main.css") }}">

 

@yield('style_tambahan')
 
 

 @yield('script_tambahan')

  </head>
  <body>

 

@include('layouts.komponen.frontend.nav_atas')


    <div class='container animated fadeIn'>
      @yield('konten_utama')
    </div>


    
@include('layouts.komponen.frontend.footer')




  </body>
</html>
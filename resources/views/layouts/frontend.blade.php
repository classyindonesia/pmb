<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_web', env('JUDUL_APP'))</title>

 

<script src="{{ elixir("js/main.js") }}"></script> 
<link rel="stylesheet" href="{{ elixir("css/main.css") }}">

 <style type="text/css">
.navbar-default {
    background-color: #{!! SV::get('navbar_bg_color') !!};
  }
</style>

@yield('style_tambahan')
 
 

 @yield('script_tambahan')

  </head>
  <body>
@yield('fb_share_open_tag')
 

@include('layouts.komponen.frontend.nav_atas')
@include('layouts.komponen.backend.modal')


    <div class='container animated fadeIn'>
      @yield('konten_utama')
      @yield('sidebar')
    </div>


    
@include('layouts.komponen.frontend.footer')



@yield('disqus_close_tag')
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
   <meta name="keywords" content="@yield('meta_keywords')">
     
    <meta name="description" content="@yield('meta_description')">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_web', env('NAMA_APP'))</title>

 
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<script src="{{ elixir("js/main.js") }}"></script> 
<link rel="stylesheet" href="{{ elixir("css/main.css") }}">
<style type="text/css">
  body {
    font-family: Dosis;
  }
</style>

@yield('style_tambahan')
 
 

 @yield('script_tambahan')

  </head>
  <body>
@yield('fb_share_open_tag')
  
@include('layouts.komponen.frontend.header')
@include('layouts.komponen.frontend.nav_atas')
@include('layouts.komponen.backend.modal')


    <div class='container animated fadeIn'>
      @yield('konten_utama')
      @yield('sidebar')
    </div>


    
@include('layouts.komponen.frontend.footer')


<a id="back-to-top" href="#" class="btn btn-warning btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
<i class='fa fa-arrow-up'></i>
</a>


@yield('disqus_close_tag')
  </body>
</html>
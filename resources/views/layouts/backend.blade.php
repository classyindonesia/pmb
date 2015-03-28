<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul_web', env('NAMA_APP', 'Official Site'))</title>

<script src="{{ elixir("js/main.js") }}"></script> 
<link rel="stylesheet" href="{{ elixir("css/main.css") }}">

<style type="text/css">
.navbar-default {
    background-color: #{!! SV::get('navbar_bg_color') !!};
  }
</style>


@yield('script_tambahan')
@yield('style_tambahan')

  </head>
  <body>

@include('layouts.komponen.backend.nav_atas')
@include('layouts.komponen.backend.modal')

 
 
 
 

<div class='container-fluid'>
  <div class='col-md-2'>
    @include('layouts.komponen.backend.sidebar')
  </div>
  <div class='col-md-10 animated fadeIn'>
   @yield('judul_header') 
    <hr>
   @yield('konten_utama')
  </div>
</div>






    <footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright &copy; {{ str_replace('http://', '', URL::to("/")) }}</p>
      </div>
    </footer>
    



  </body>
</html>
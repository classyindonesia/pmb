@extends('layouts.backend')
 

@section('judul_header')
  <h1 class="title_header"> Dashboard </h1>
@endsection

@section('konten_utama')

  @include($base_view.'list_data')

  <div class="col-lg-3 col-xs-6 animated fadeIn">
      <div class="small-box bg-olive">
        <div class="inner">
            <h3> 
               0
            </h3>
            <p>
                Jml Arsip
            </p>
        </div>
        <div class="icon">
           <i class='fa fa-archive'></i>
        </div>
        <a href="http://somelier.reka.com/my_archive" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>




@endsection

@extends('layouts.backend')

@section('konten_utama')



  @include('konten.backend.dashboard.camaba.wizard')

  @include($base_view_index.'step_box1')
  @include($base_view_index.'step_box2')
  @include($base_view_index.'step_box3')
  @include($base_view_index.'step_box4')


@endsection



@section('judul_header')
  <h1 class="title_header"> Biodata Saya </h1>
@endsection
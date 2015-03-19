@extends('layouts.backend')

@section('konten_utama')



  @include('konten.backend.dashboard.camaba.wizard')

  @include('konten.backend.dashboard.camaba.step_box1')
  @include('konten.backend.dashboard.camaba.step_box2')


@endsection



@section('judul_header')
  <h1 class="title_header"> Biodata Saya </h1>
@endsection
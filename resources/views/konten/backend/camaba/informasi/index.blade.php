@extends('layouts.backend')


@section('judul_header')
   <h1 class="title_header"><i class="fa fa-newspaper-o"></i>  Informasi </h1>
@endsection


@section('konten_utama')


@include($base_view.'info1')
@include($base_view.'info2')



@include($base_view.'info3')

 

@endsection



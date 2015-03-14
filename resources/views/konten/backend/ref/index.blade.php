@extends('layouts.backend')

@section('konten_utama')

@include('konten.backend.ref.komponen.nav_atas')

                        <div class="col-md-6 animated fadeIn">
                            <!-- Primary tile -->
                            <div class="box box-solid bg-light-blue">
                                <div class="box-header">
                                    <h3 class="box-title"> 
                                    <i class='fa fa-info'></i> Data Referensi</h3>
                                </div>
                                <div class="box-body">
                                    <p>Data yang digunakan untuk mengisi
                                    	data master atau data utama
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->




@endsection



@section('judul_header') 
  <h1 class="title_header"> Data Referensi </h1>
@endsection
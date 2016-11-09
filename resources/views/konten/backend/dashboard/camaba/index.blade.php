@extends('layouts.backend')

@section('konten_utama')

<h3>
	Selamat Datang Sdr. {!! auth()->user()->nama !!} <br>	
</h3>
<hr>
<h4>
Sekarang Hari {{ Fungsi::hari() }}, Tanggal {!! Fungsi::date_to_tgl(date('Y-m-d')) !!}, Pukul {!! date('H:i') !!} WIB
</h4>
@endsection



@section('judul_header')
  <h1 class="title_header"> Dashboard </h1>
@endsection
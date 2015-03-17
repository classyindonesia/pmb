@extends('layouts.backend')

@section('judul_header')
   <h1 class="title_header"><i class='fa fa-street-view'></i>  Pendaftaran Calon Mahasiswa Baru </h1>
@endsection


@section('konten_utama')
 <script type="text/javascript">
 $('.selectpicker').selectpicker();
</script>


<div class='col-md-8' >
	@include('konten.backend.pendaftaran.komponen.wizard')
	@include('konten.backend.pendaftaran.all_step')
</div>

 	@include('konten.backend.pendaftaran.selected_form')
 	@include('konten.backend.pendaftaran.form_data1')
 	@include('konten.backend.pendaftaran.script')

@endsection


@include('konten.backend.pendaftaran.komponen.style_tambahan')
@include('konten.backend.pendaftaran.komponen.script_tambahan')



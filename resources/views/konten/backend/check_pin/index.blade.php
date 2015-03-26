@extends('layouts.backend')

@section('judul_header')
   <h1 class="title_header"> <i class='fa fa-qrcode'></i>  Check PIN Pendaftaran  </h1>
@endsection

 

@section('konten_utama')

<div class="col-md-12">
	{!! Form::open(array('route' => 'check_pin.index', 'method' => 'get')) !!}
	   <div class="input-group">
 	 		{!! Form::text('search', 
 	 			Request::get('search'), 
 	 				['class' => 'form-control', 
 	 					'autofocus', 
 	 				'placeholder' => 'check PIN...',
 	 				'style' => 'font-size:30px;height:80px;'
 	 				]) !!}
	      <div class="input-group-addon ">
	      	 <i class='fa fa-search'></i> Check
	      </div>
	    </div>
	{!! Form::close() !!}	
</div>
 
 <hr class="hidden-md hidden-lg col-xs-12 col-md-12">



	@if(Request::get('search'))
		<hr class="col-md-12">
		@if(count($pin)>0)
			<div class="col-md-5">

<div class="panel panel-default">
  <div class="panel-heading" style="font-weight:bold;">Detail Pemakaian Nomor PIN</div>
  <div class="panel-body">
     @include($base_view.'view_pin')
  </div>
</div>

								
			</div>
		@else
			<h1 class="text-danger">
				Pin tidak ditemukan
			</h1>
		@endif
 	@endif
@endsection




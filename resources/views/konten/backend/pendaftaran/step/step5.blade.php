<h3>Biodata</h3>
<hr>

<div class='col-md-6'>
	<div class='form-group'>
		{!! Form::label("nama", 'Nama Lengkap :') !!}
		<input type='text' name='nama' id='nama' class='form-control' placeholder='Nama Lengkap...' />
	</div>




	<div class='form-group'>
		{!! Form::label("tempat_lahir", 'Tempat Lahir dan Tanggal Lahir :') !!}
		<input type='text' name='tempat_lahir' id='tempat_lahir' class='form-control' placeholder='Tempat Lahir...' />

		{!! Form::selectRange('tgl_lahir', 1, 31, date('d'),  ['id' => 'tgl_lahir', 'style' => 'width:60px']) !!}
		{!! Form::selectMonth('bln_lahir', date('m'),  ['id' => 'bln_lahir', 'style' => 'width:100px']) !!} 
		{!! Form::selectYear('thn', 1950, 2010,  1995, ['id' => 'thn_lahir', 'style' => 'width:100px']) !!}
	</div>


	<div class='form-group'>
		{!! Form::label("jenis_kelamin", 'Jenis Kelamin :') !!} <br>
		{!! Form::select('jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan'], 'L', ['id' => 'jenis_kelamin']) !!}
	</div>



	<div class='form-group'>
		{!! Form::label("alamat_email", 'E-Mail :') !!} <br>
		<input type='text' name='alamat_email' id='alamat_email' class='form-control' placeholder='Alamat Email...' />
	</div>	

	<div class='form-group'>
		{!! Form::label("no_hp", 'Nomor Handphone :') !!}
		<input type='text' name='no_hp' id='no_hp' class='form-control' placeholder='Nomor Handphone...' />
	</div>

</div>

<div class='col-md-6'>

	<div class='form-group'>
		{!! Form::label("alamat", 'Alamat :') !!}
		<input type='text' name='alamat' id='alamat' class='form-control' placeholder='Alamat...' />
	</div>

  

	<div class='form-group'>
		{!! Form::label("ref_sma_id", 'sekolah asal :') !!} <br>
		{!! Form::select('ref_sma_id',  Fungsi::get_dropdown($sma, 'sma'), '', ['id' => 'ref_sma_id', 'class' => 'selectpicker', 'data-live-search' => 'true']) !!}
	</div>



</div>



@include('konten.backend.pendaftaran.tombol_simpan')

<h3>Biodata</h3>
<hr>

<div class='col-md-6'>
	<div class='form-group'>
		{!! Form::label("nama", 'nama :') !!}
		<input type='text' name='nama' id='nama' class='form-control' placeholder='nama...' />
	</div>


	<div class='form-group'>
		{!! Form::label("alamat", 'Alamat :') !!}
		<input type='text' name='alamat' id='alamat' class='form-control' placeholder='Alamat...' />
	</div>

	<div class='form-group'>
		{!! Form::label("tempat_lahir", 'Tempat Lahir :') !!}
		<input type='text' name='tempat_lahir' id='tempat_lahir' class='form-control' placeholder='Tempat Lahir...' />
	</div>

	<div class='form-group'>
		{!! Form::label("tgl_lahir", 'Tgl Lahir(tgl/bln/thn) :') !!} <br>
		{!! Form::selectRange('tgl_lahir', 1, 31, date('d'),  ['id' => 'tgl_lahir', 'style' => 'width:60px']) !!}
		{!! Form::selectMonth('bln_lahir', date('m'),  ['id' => 'bln_lahir', 'style' => 'width:100px']) !!} 
		{!! Form::selectYear('thn', 1950, 2010,  1995, ['id' => 'thn_lahir', 'style' => 'width:100px']) !!}
	</div>

	<div class='form-group'>
		{!! Form::label("tempat_lahir", 'Tempat Lahir :') !!} <br>
		{!! Form::select('jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan'], 'L', ['id' => 'jenis_kelamin']) !!}
	</div>

</div>

<div class='col-md-6'>

	<div class='form-group'>
		{!! Form::label("no_hp", 'Nomor HP :') !!}
		<input type='text' name='no_hp' id='no_hp' class='form-control' placeholder='Nomor HP...' />
	</div>

	<div class='form-group'>
		{!! Form::label("thn_lulus", 'Tahun Lulus :') !!} <br>
		{!! Form::selectYear('thn_lulus', 1950, 2010,  1995, ['id' => 'thn_lulus', 'style' => 'width:100px']) !!}
	</div>


	<div class='form-group'>
		{!! Form::label("no_ijazah", 'Nomor Ijazah :') !!}
		<input type='text' name='no_ijazah' id='no_ijazah' class='form-control' placeholder='Nomor Ijazah...' />
	</div>


	<div class='form-group'>
		{!! Form::label("ref_sma_id", 'sekolah asal :') !!} <br>
		{!! Form::select('ref_sma_id',  Fungsi::get_dropdown($sma, 'sma'), '', ['id' => 'ref_sma_id', 'class' => 'selectpicker', 'data-live-search' => 'true']) !!}
	</div>
</div>



@include('konten.backend.pendaftaran.tombol_simpan')

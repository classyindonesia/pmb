

  <div class="form-group">
  	{!! Form::label('nama', 'nama lengkap : ') !!}
  	<input type="text" name='nama' id="nama" value="{!! $biodata->nama !!}" placeholder='Nama lengkap...' class="form-control" />
  </div>


  <div class="form-group">
  	{!! Form::label('alamat', 'alamat : ') !!}
  	<input type="text" name='alamat' id="alamat" value="{!! $biodata->alamat !!}" placeholder='alamat...' class="form-control" />
  </div>



<div class="form-group">
	{!! Form::label('ref_kota_id', 'Kota : ') !!}
	{!! Form::select('ref_kota_id', $ref_kota, '', ['id' => 'ref_kota_id']) !!}
</div>


<div class="form-group">
	{!! Form::label('jenis_kelamin', 'Jenis Kelamin : ') !!}
	{!! Form::select('jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan'], $biodata->jenis_kelamin, ['id' => 'jenis_kelamin']) !!}
</div>





  <div class="form-group">
  	{!! Form::label('nama', 'nama lengkap : ') !!}
  	<input type="text" name='nama' id="nama" value="{!! $biodata->mst_biodata->nama !!}" placeholder='Nama lengkap...' class="form-control" />
  </div>


  <div class="form-group">
  	{!! Form::label('alamat', 'alamat : ') !!}
  	<input type="text" name='alamat' id="alamat" value="{!! $biodata->mst_biodata->alamat !!}" placeholder='alamat...' class="form-control" />
  </div>



<div class="form-group">
	{!! Form::label('ref_kota_id', 'Kota : ') !!}
	{!! Form::select('ref_kota_id', $ref_kota, $biodata->mst_biodata->ref_kota_id, ['id' => 'ref_kota_id']) !!}
</div>


<div class="form-group">
	{!! Form::label('jenis_kelamin', 'Jenis Kelamin : ') !!}
	{!! Form::select('jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan'], $biodata->mst_biodata->jenis_kelamin, ['id' => 'jenis_kelamin']) !!}
</div>



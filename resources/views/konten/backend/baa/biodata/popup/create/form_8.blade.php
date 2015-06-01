


<div class="form-group">
	{!! Form::label('nama_ortu_ayah', 'Nama Ayah : ') !!}
	<input type="text" name='nama_ortu_ayah' id="nama_ortu_ayah" value="" placeholder='Nama Ayah..' class="form-control" />
</div>

<div class="form-group">
	{!! Form::label('tgl_lahir_ayah', 'Tgl Lahir Ayah : ') !!}
   <br>
  	{!! Form::selectRange('tgl_lahir_ayah', 1, 31, date('d', strtotime($biodata->tgl_lahir_ayah)),  ['id' => 'tgl_lahir_ayah', 'style' => 'width:40px' ]) !!}
  	{!! Form::selectMonth('bln_lahir_ayah', date('m', strtotime($biodata->tgl_lahir_ayah)),  ['id' => 'bln_lahir_ayah', 'style' => 'width:80px' ]) !!} 
  	{!! Form::selectYear('thn_ayah', 1950, 2010,  date('Y', strtotime($biodata->tgl_lahir_ayah)), ['id' => 'thn_lahir_ayah', 'style' => 'width:60px' ]) !!}
</div>

   <div class="form-group">
    {!! Form::label('ref_pendidikan_id_ayah', 'Pendidikan Terakhir Ayah : ') !!}
    {!! Form::select('ref_pendidikan_id_ayah', $ref_pendidikan, '', ['id' => 'ref_pendidikan_id_ayah']) !!}
  </div>




<div class="form-group">
	{!! Form::label('alamat_ortu', 'Alamat Ortu : ') !!}
	<input type="text" name='alamat_ortu' id="alamat_ortu" value="" placeholder='ALamat ortu...' class="form-control" />
</div>

   <div class="form-group">
    {!! Form::label('ref_kota_id_ortu', 'Kota Ortu : ') !!}
    {!! Form::select('ref_kota_id_ortu', $ref_kota, '', ['id' => 'ref_kota_id_ortu', 'class' => 'form-control']) !!}
  </div>
 


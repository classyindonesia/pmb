


<div class="form-group">
	{!! Form::label('nama_ortu_ayah', 'Nama Ayah : ') !!}
	<input type="text" name='nama_ortu_ayah' id="nama_ortu_ayah" value="{!! $biodata->mst_biodata->nama_ortu_ayah !!}" placeholder='Nama Ayah..' class="form-control" />
</div>


<div class="form-group">
	{!! Form::label('nama_ortu_ibu', 'Nama Ibu : ') !!}
	<input type="text" name='nama_ortu_ibu' id="nama_ortu_ibu" value="{!! $biodata->mst_biodata->nama_ortu_ibu !!}" placeholder='Nama Ibu...' class="form-control" />
</div>


<div class="form-group">
	{!! Form::label('alamat_ortu', 'Alamat Ortu : ') !!}
	<input type="text" name='alamat_ortu' id="alamat_ortu" value="{!! $biodata->mst_biodata->alamat_ortu !!}" placeholder='ALamat ortu...' class="form-control" />
</div>

   <div class="form-group">
    {!! Form::label('ref_kota_id_ortu', 'Kota Ortu : ') !!}
    {!! Form::select('ref_kota_id_ortu', $ref_kota, $biodata->mst_biodata->ref_kota_id_ortu, ['id' => 'ref_kota_id_ortu']) !!}
  </div>
 


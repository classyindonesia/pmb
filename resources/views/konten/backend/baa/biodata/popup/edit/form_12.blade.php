  <div class="form-group">
  	{!! Form::label('alamat', 'alamat : ') !!}
  	<input type="text" name='alamat' id="alamat" value="{!! $biodata->mst_biodata->alamat !!}" placeholder='alamat...' class="form-control" />
  </div>



<div class="form-group">
	{!! Form::label('ref_kota_id', 'Kota : ') !!}
	{!! Form::select('ref_kota_id', $ref_kota, $biodata->mst_biodata->ref_kota_id, ['id' => 'ref_kota_id']) !!}
</div>
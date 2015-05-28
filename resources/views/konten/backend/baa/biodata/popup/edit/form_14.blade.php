<div class="form-group">
	{!! Form::label('kode_pos', 'Kode POS : ') !!}
	<input type="text" name='kode_pos' id="kode_pos" maxlength="8" value="{!! $biodata->mst_biodata->kode_pos !!}"   placeholder='kode pos...' class="form-control" />
</div>
 

<div class="form-group">
	{!! Form::label('kewarganegaraan', 'Kewarganegaraan : ') !!}
	{!! Form::select('kewarganegaraan', ['wni' => 'WNI', 'wna' => 'WNA'], $biodata->mst_biodata->kewarganegaraan, ['id' => 'kewarganegaraan']) !!}
</div>


<div class="form-group">
	{!! Form::label('ref_tinggal_id', 'Jenis Tinggal : ') !!}
	{!! Form::select('ref_tinggal_id', $ref_tinggal, $biodata->mst_biodata->ref_tinggal_id, ['id' => 'ref_tinggal_id']) !!}
</div>

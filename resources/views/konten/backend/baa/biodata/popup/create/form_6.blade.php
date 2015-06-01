 <div class="form-group">
    {!! Form::label('alamat_sekolah', 'Alamat Sekolah : ') !!}
    <input type="text" id="alamat_sekolah" name='alamat_sekolah' value="" placeholder='ALamat sekolah...' class="form-control" />
  </div> 

   <div class="form-group">
    {!! Form::label('ref_sma_id', 'Asal Sekolah : ') !!}
    {!! Form::select('ref_sma_id', $ref_sma, $biodata->ref_sma_id, ['id' => 'ref_sma_id', 'class' => 'form-control']) !!}

<i class='fa fa-info-circle' data-toggle='tooltip' title='jika data sekolah tidak ada, pilih opsi paling bawah'></i>

  </div>

 

<div class='form-group' id='input_keterangan_sma' style="display:none;">
	{!! Form::label("keterangan_sma", 'Asal Sekolah :') !!}
	<input type='text' name='keterangan_sma' id='keterangan_sma' class='form-control' placeholder='Asal Sekolah...' />
</div>
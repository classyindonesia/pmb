 <div class="form-group">
    {!! Form::label('alamat_sekolah', 'Alamat Sekolah : ') !!}
    <input type="text" name='alamat_sekolah' value="" placeholder='ALamat sekolah...' class="form-control" />
  </div> 

   <div class="form-group">
    {!! Form::label('ref_sma_id', 'Asal Sekolah : ') !!}
    {!! Form::select('ref_sma_id', $ref_sma, $biodata->ref_sma_id, ['id' => 'ref_sma_id']) !!}
  </div>

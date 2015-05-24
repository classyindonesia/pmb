   <div class="form-group">
    {!! Form::label('ref_status_daftar_ulang_id', 'status daftar ulang : ') !!}
    {!! Form::select('ref_status_daftar_ulang_id', $ref_status_daftar_ulang, $biodata->mst_biodata->ref_status_daftar_ulang_id, ['id' => 'ref_status_daftar_ulang_id']) !!}
  </div>

 
   <div class="form-group">
    {!! Form::label('ref_ukuran_almamater_id', 'ukuran almamater : ') !!}
    {!! Form::select('ref_ukuran_almamater_id', $ref_ukuran_almamater, $biodata->mst_biodata->ref_ukuran_almamater_id, ['id' => 'ref_ukuran_almamater_id']) !!}
  </div>




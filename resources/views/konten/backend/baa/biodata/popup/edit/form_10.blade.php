   <div class="form-group">
    {!! Form::label('ref_pekerjaan_ortu_id_ayah', 'Pekerjaan Ayah : ') !!}
    {!! Form::select('ref_pekerjaan_ortu_id_ayah', $ref_pekerjaan_ortu, $biodata->mst_biodata->ref_pekerjaan_ortu_id_ayah, ['id' => 'ref_pekerjaan_ortu_id_ayah']) !!}
  </div>

   <div class="form-group">
    {!! Form::label('ref_pekerjaan_ortu_id_ibu', 'Pekerjaan Ibu : ') !!}
    {!! Form::select('ref_pekerjaan_ortu_id_ibu', $ref_pekerjaan_ortu, $biodata->mst_biodata->ref_pekerjaan_ortu_id_ibu, ['id' => 'ref_pekerjaan_ortu_id_ibu']) !!}
  </div>

   <div class="form-group">
	{!! Form::label('no_hp_ortu', 'No HP Ortu : ') !!}
	<input type="text" name='no_hp_ortu' placeholder='nomor hp orang tua...' id="no_hp_ortu" value="{!! $biodata->mst_biodata->no_hp_ortu !!}" class="form-control" />
</div>

   <div class="form-group">
    {!! Form::label('ket_ortu_ibu', 'Status Ibu : ') !!}<br>
    {!! Form::select('ket_ortu_ibu', $ket_ortu, $biodata->mst_biodata->ket_ortu_ibu, ['id' => 'ket_ortu_ibu']) !!}
  </div>



   <div class="form-group">
    {!! Form::label('ket_ortu_ayah', 'Status Ayah : ') !!}<br>
    {!! Form::select('ket_ortu_ayah', $ket_ortu, $biodata->mst_biodata->ket_ortu_ayah, ['id' => 'ket_ortu_ayah']) !!}
  </div>
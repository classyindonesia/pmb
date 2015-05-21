 <div class="form-group">
	{!! Form::label('no_hp_ortu', 'No HP Ortu : ') !!}
	<input type="text" name='no_hp_ortu' id="no_hp_ortu" placeholder='Nomor HP Ortu' value="" class="form-control" />
</div>


   <div class="form-group">
    {!! Form::label('ref_penghasilan_ortu_id_ayah', 'Penghasilan Ayah : ') !!}
    {!! Form::select('ref_penghasilan_ortu_id_ayah', $ref_penghasilan_ortu, '', ['id' => 'ref_penghasilan_ortu_id_ayah']) !!}
  </div>
 
   <div class="form-group">
    {!! Form::label('ref_penghasilan_ortu_id_ibu', 'Penghasilan Ibu : ') !!}
    {!! Form::select('ref_penghasilan_ortu_id_ibu', $ref_penghasilan_ortu, '', ['id' => 'ref_penghasilan_ortu_id_ibu']) !!}
  </div>
 


   <div class="form-group">
    {!! Form::label('ket_ortu_ayah', 'Status Ayah : ') !!}
    {!! Form::select('ket_ortu_ayah', $ket_ortu, '', ['id' => 'ket_ortu_ayah']) !!}
  </div>


 
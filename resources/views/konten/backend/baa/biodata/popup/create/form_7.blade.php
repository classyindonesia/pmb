   <div class="form-group">
    {!! Form::label('ref_identitas_id', 'Jenis Identitas : ') !!}
    {!! Form::select('ref_identitas_id', $ref_identitas, '', ['id' => 'ref_identitas_id']) !!}
  </div>

 <div class="form-group">
    {!! Form::label('no_identitas', 'Nomor Identitas : ') !!}
    <input type="text" name='no_identitas' value="" class="form-control" />
  </div> 



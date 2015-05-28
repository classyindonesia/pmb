 
 
   <div class="form-group">
    {!! Form::label('ref_ukuran_almamater_id', 'ukuran almamater : ') !!}
    {!! Form::select('ref_ukuran_almamater_id', $ref_ukuran_almamater, '', ['id' => 'ref_ukuran_almamater_id']) !!}
  </div>



   <div class="form-group">
    {!! Form::label('jenis_pendaftaran', 'Jenis Pendaftaran : ') !!}
    {!! Form::select('jenis_pendaftaran', ['sma' => 'Peserta Didik Baru', 'transfer' => 'Pindahan/Transfer'], 'sma', ['id' => 'jenis_pendaftaran']) !!}
  </div>

   <div class="form-group" id='pilih_pt' style="display:none;">
    {!! Form::label('ref_perguruan_tinggi_id', 'Perguruan Tinggi : ') !!}
    {!! Form::select('ref_perguruan_tinggi_id', $ref_perguruan_tinggi, '', ['id' => 'ref_perguruan_tinggi_id']) !!}
  </div>


<hr>
 
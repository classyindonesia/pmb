 
 
   <div class="form-group">
    {!! Form::label('ref_ukuran_almamater_id', 'ukuran almamater : ') !!}
    {!! Form::select('ref_ukuran_almamater_id', $ref_ukuran_almamater, '', ['id' => 'ref_ukuran_almamater_id']) !!}
  </div>



   <div class="form-group">
    {!! Form::label('jenis_pendaftaran', 'Jenis Pendaftaran : ') !!}
    {!! Form::select('jenis_pendaftaran', ['sma' => 'Peserta Didik Baru', 'transfer' => 'Pindahan/Transfer'], 'sma', ['id' => 'jenis_pendaftaran']) !!}
  </div>

<div  id='pilih_pt' style="display:none;">
    <div class="form-group">
    {!! Form::label('ref_perguruan_tinggi_id', 'Perguruan Tinggi : ') !!}
    {!! Form::select('ref_perguruan_tinggi_id', $ref_perguruan_tinggi, '', ['id' => 'ref_perguruan_tinggi_id']) !!}
  </div>


   <div class="form-group"  >
    {!! Form::label('ref_prodi_id_pt', 'Program Studi : ') !!}
    <div id="dropdown_ref_prodi_pt">
      {!! Form::select('ref_prodi_id_pt', [], '') !!}
    </div>
  </div>    

</div>




  <div class="form-group" id='ket_pt' style="display:none;">
    {!! Form::label('keterangan_perguruan_tinggi', 'Perguruan Tinggi : ') !!}
    <input type="text" name='keterangan_perguruan_tinggi' id="keterangan_perguruan_tinggi" placeholder='perguruan tinggi...' class="form-control" />
  </div>
 
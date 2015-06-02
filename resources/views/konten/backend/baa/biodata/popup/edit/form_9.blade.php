 <div class="form-group">
  {!! Form::label('nama_ortu_ibu', 'Nama Ibu : ') !!}
  <input type="text" name='nama_ortu_ibu' id="nama_ortu_ibu" value="{!! $biodata->mst_biodata->nama_ortu_ibu !!}" placeholder='Nama Ibu...' class="form-control" />
</div>




<div class="form-group">
  {!! Form::label('tgl_lahir_ayah', 'Tgl Lahir Ibu : ') !!}
  <br>
    {!! Form::selectRange('tgl_lahir_ibu', 1, 31, date('d', strtotime($biodata->mst_biodata->tgl_lahir_ibu)),  ['id' => 'tgl_lahir_ibu', 'style' => 'width:40px' ]) !!}
    {!! Form::selectMonth('bln_lahir_ibu', date('m', strtotime($biodata->mst_biodata->tgl_lahir_ibu)),  ['id' => 'bln_lahir_ibu', 'style' => 'width:80px' ]) !!} 
    {!! Form::selectYear('thn_ibu', 1950, 2010,  date('Y', strtotime($biodata->mst_biodata->tgl_lahir_ibu)), ['id' => 'thn_lahir_ibu', 'style' => 'width:60px' ]) !!}
</div>

   <div class="form-group">
    {!! Form::label('ref_pendidikan_id_ibu', 'Pendidikan Terakhir Ayah : ') !!}<br>
    {!! Form::select('ref_pendidikan_id_ibu', $ref_pendidikan, $biodata->mst_biodata->ref_pendidikan_id_ibu, ['id' => 'ref_pendidikan_id_ibu']) !!}
  </div>







   <div class="form-group">
    {!! Form::label('ref_penghasilan_ortu_id_ayah', 'Penghasilan Ayah : ') !!}<br>
    {!! Form::select('ref_penghasilan_ortu_id_ayah', $ref_penghasilan_ortu, $biodata->mst_biodata->ref_penghasilan_ortu_id_ayah, ['id' => 'ref_penghasilan_ortu_id_ayah']) !!}
  </div>
 
   <div class="form-group">
    {!! Form::label('ref_penghasilan_ortu_id_ibu', 'Penghasilan Ibu : ') !!}<br>
    {!! Form::select('ref_penghasilan_ortu_id_ibu', $ref_penghasilan_ortu, $biodata->mst_biodata->ref_penghasilan_ortu_id_ibu, ['id' => 'ref_penghasilan_ortu_id_ibu']) !!}
  </div>
 





 
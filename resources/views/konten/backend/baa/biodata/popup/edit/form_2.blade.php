<div class="form-group">
	{!! Form::label('tempat_lahir', 'tempat lahir : ') !!}
	<input type="text" id="tempat_lahir" name='tempat_lahir' value="{!! $biodata->mst_biodata->tempat_lahir !!}" class="form-control" />
</div>

<div class='form-group'>
		{!! Form::label("tgl_lahir", 'Tgl Lahir :') !!}
	{!! Form::selectRange('tgl_lahir', 1, 31, date('d', strtotime($biodata->mst_biodata->tgl_lahir)),  ['id' => 'tgl_lahir', 'style' => 'width:40px' ]) !!}
	{!! Form::selectMonth('bln_lahir', date('m', strtotime($biodata->mst_biodata->tgl_lahir)),  ['id' => 'bln_lahir', 'style' => 'width:80px' ]) !!} 
	{!! Form::selectYear('thn', 1950, 2010,  date('Y', strtotime($biodata->mst_biodata->tgl_lahir)), ['id' => 'thn_lahir', 'style' => 'width:60px' ]) !!}
</div>


  <div class="form-group">
  	{!! Form::label('ref_agama_id', 'Agama : ') !!}
  	{!! Form::select('ref_agama_id', $ref_agama, $biodata->mst_biodata->ref_agama_id, ['id' => 'ref_agama_id']) !!}
  </div>


  
<div class="form-group">
  {!! Form::label('jml_saudara', 'Jumlah Saudara : ') !!}
  <input type="text" name='jml_saudara' id="jml_saudara" value="{!! $biodata->mst_biodata->jml_saudara !!}" placeholder='Jumlah saudara...' class="form-control" />
</div>


<div class="form-group">
  {!! Form::label('anak_ke', 'Anak Ke : ') !!}
  <input type="text" name='anak_ke' id="anak_ke" value="{!! $biodata->mst_biodata->anak_ke !!}" class="form-control" placeholder='anak ke..'  />
</div>
 
 
 <script type="text/javascript">
     $('#jml_saudara').keypress(function(e) {
            var a = [];
            var k = e.which;

            for (i = 48; i < 58; i++)
            a.push(i);
            a.push(8);
            if (!(a.indexOf(k)>=0))
                e.preventDefault();
            }); 
     $('#anak_ke').keypress(function(e) {
            var a = [];
            var k = e.which;

            for (i = 48; i < 58; i++)
            a.push(i);
            a.push(8);
            if (!(a.indexOf(k)>=0))
                e.preventDefault();
            }); 
</script>
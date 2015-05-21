<div class="form-group">
	{!! Form::label('tempat_lahir', 'tempat lahir : ') !!}
	<input type="text" name='tempat_lahir' value="{!! $biodata->tempat_lahir !!}" class="form-control" />
</div>

<div class='form-group'>
		{!! Form::label("tgl_lahir", 'Tgl Lahir :') !!}
	{!! Form::selectRange('tgl_lahir', 1, 31, date('d', strtotime($biodata->tgl_lahir)),  ['id' => 'tgl_lahir', 'style' => 'width:40px' ]) !!}
	{!! Form::selectMonth('bln_lahir', date('m', strtotime($biodata->tgl_lahir)),  ['id' => 'bln_lahir', 'style' => 'width:80px' ]) !!} 
	{!! Form::selectYear('thn', 1950, 2010,  date('Y', strtotime($biodata->tgl_lahir)), ['id' => 'thn_lahir', 'style' => 'width:60px' ]) !!}
</div>


  <div class="form-group">
  	{!! Form::label('ref_agama_id', 'Agama : ') !!}
  	{!! Form::select('ref_agama_id', $ref_agama, '', ['id' => 'ref_agama_id']) !!}
  </div>
<div class='col-md-6'>

	<div class='form-group'>
		{!! Form::label("alamat", 'Alamat :') !!}
		<input type='text' value='{!! $b->alamat !!}' name='alamat' id='alamat' class='form-control' placeholder='Alamat...' />
	</div>

	<div class='form-group'>
		{!! Form::label("thn_lulus", 'Tahun Lulus :') !!} <br>
		{!! Form::selectYear('thn_lulus', 1950, 2010,  $b->thn_lulus, ['id' => 'thn_lulus', 'style' => 'width:100px']) !!}
	</div>


	<div class='form-group'>
		{!! Form::label("no_ijazah", 'Nomor Ijazah :') !!}
		<input type='text' name='no_ijazah' value='{!! $b->no_ijazah !!}' id='no_ijazah' class='form-control' placeholder='Nomor Ijazah...' />
	</div>


	<div class='form-group'>
		{!! Form::label("ref_sma_id", 'sekolah asal :') !!} <br>
		{!! Form::select('ref_sma_id',  Fungsi::get_dropdown($sma, 'sma'), $b->ref_sma_id, ['id' => 'ref_sma_id', 'class' => 'selectpicker', 'data-live-search' => 'true']) !!}
	</div>
 

 


</div>
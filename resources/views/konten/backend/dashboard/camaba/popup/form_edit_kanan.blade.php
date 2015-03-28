<div class='col-md-6'>

	<div class='form-group'>
		{!! Form::label("alamat", 'Alamat :') !!}
		<input type='text' value='{!! $b->alamat !!}' name='alamat' id='alamat' class='form-control' placeholder='Alamat...' />
	</div>

  
	<div class='form-group'>
		{!! Form::label("ref_sma_id", 'sekolah asal :') !!} <br>
		{!! Form::select('ref_sma_id',  Fungsi::get_dropdown($sma, 'sma'), $b->ref_sma_id, ['id' => 'ref_sma_id', 'class' => 'selectpicker', 'data-live-search' => 'true']) !!}
	</div>
 



	<div class='form-group'>
		{!! Form::label("no_hp", 'Nomor Handphone :') !!}
		<input type='text' value='{!! $b->no_hp !!}' name='no_hp' id='no_hp' class='form-control' placeholder='Nomor Handphone...' />
	</div>


</div>
 <script type="text/javascript">
 	$(function () { $("[data-toggle='tooltip']").tooltip(); });
 
 </script>

<div class='col-md-6'>

	<div class='form-group'>
		{!! Form::label("alamat", 'Alamat :') !!}
		<input type='text' value='{!! $b->alamat !!}' name='alamat' id='alamat' class='form-control' placeholder='Alamat...' />
	</div>

  
	<div class='form-group'>
		{!! Form::label("ref_sma_id", 'sekolah asal :') !!} <br>

{!! Form::select('ref_sma_id', $sma, $b->ref_sma_id, 
					[
							'id' => 'ref_sma_id',
							'style'	=> 'width:250px;', 
 					]) !!}
 		<i class='fa fa-info-circle' data-toggle='tooltip' title='jika data sekolah tidak ada, pilih opsi paling bawah'></i>
	</div>
 
	<div class='form-group' id='input_keterangan_sma' style="display:none;">
		{!! Form::label("keterangan_sma", 'Asal Sekolah :') !!}
		<input type='text' value='{!! $b->keterangan_sma !!}' name='keterangan_sma' id='keterangan_sma' class='form-control' placeholder='Asal Sekolah...' />
	</div>


	<div class='form-group'>
		{!! Form::label("no_hp", 'Nomor Handphone :') !!}
		<input type='text' value='{!! $b->no_hp !!}' name='no_hp' id='no_hp' class='form-control' placeholder='Nomor Handphone...' />
	</div>


</div>

 
<table class="table table-bordered table-hover">
	<tr>
	<td width='5%' class="text-center">1.</td>
		<td>Warna Navbar Header</td>
		<td width='20%'>
			<input class="color" id='value_navbar_bg_color' value="{!! SV::get('navbar_bg_color') !!}">
		</td>

		<td width='5%'>
			{!! Action::update_variable('1', 'navbar_bg_color') !!}
		</td>
	</tr>




	<tr>
	<td width='5%' class="text-center">2.</td>
		<td>Tahun Ajaran</td>
		<td width='20%'>
			{!! Form::select('ref_thn_ajaran_id', $thn_ajaran, SV::get('ref_thn_ajaran_id'), ['id' => 'value_ref_thn_ajaran_id']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('2', 'ref_thn_ajaran_id') !!}
		</td>
	</tr>




	<tr>
	<td width='5%' class="text-center">3.</td>
		<td>Gelombang</td>
		<td width='20%'>
			{!! Form::select('ref_gelombang_id', $ref_gelombang, SV::get('ref_gelombang_id'), ['id' => 'value_ref_gelombang_id']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('3', 'ref_gelombang_id') !!}
		</td>
	</tr>



</table>
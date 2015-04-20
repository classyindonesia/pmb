	<tr>
	<td width='5%' class="text-center">1.</td>
		<td>Tahun Ajaran</td>
		<td width='20%'>
			{!! Form::select('ref_thn_ajaran_id', $thn_ajaran, SV::get('ref_thn_ajaran_id'), ['id' => 'value_ref_thn_ajaran_id']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('1', 'ref_thn_ajaran_id') !!}
		</td>
	</tr>

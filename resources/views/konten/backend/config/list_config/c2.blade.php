	<tr>
	<td width='5%' class="text-center">2.</td>
		<td>Gelombang</td>
		<td width='20%'>
			{!! Form::select('ref_gelombang_id', $ref_gelombang, SV::get('ref_gelombang_id'), ['id' => 'value_ref_gelombang_id']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('1', 'ref_gelombang_id') !!}
		</td>
	</tr>
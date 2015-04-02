	<tr>
	<td width='5%' class="text-center">7.</td>
		<td>Config Pindah Prodi Level Camaba</td>
		<td width='20%'>
			{!! Form::select('config_pindah_prodi', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('config_pindah_prodi'), ['id' => 'value_config_pindah_prodi']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('7', 'config_pindah_prodi') !!}
		</td>
	</tr>
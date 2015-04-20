	<tr>
	<td width='5%' class="text-center">6.</td>
		<td>Config Pendaftaran Offline Level Operator</td>
		<td width='20%'>
			{!! Form::select('config_pendaftaran_offline_operator', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('config_pendaftaran_offline_operator'), ['id' => 'value_config_pendaftaran_offline_operator']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('6', 'config_pendaftaran_offline_operator') !!}
		</td>
	</tr>
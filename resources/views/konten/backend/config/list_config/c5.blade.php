	<tr>
	<td width='5%' class="text-center">5.</td>
		<td>Config Pendaftaran Online Halaman Depan</td>
		<td width='20%'>
			{!! Form::select('config_pendaftaran_online', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('config_pendaftaran_online'), ['id' => 'value_config_pendaftaran_online']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('5', 'config_pendaftaran_online') !!}
		</td>
	</tr>
	<tr>
	<td width='5%' class="text-center">3.</td>
		<td>Akses Login depan</td>
		<td width='20%'>
			{!! Form::select('config_login_frontend', ['1' => 'show', 0 => 'hide'], SV::get('config_login_frontend'), ['id' => 'value_config_login_frontend']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('3', 'config_login_frontend') !!}
		</td>
	</tr>

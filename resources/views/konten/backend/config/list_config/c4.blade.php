	<tr>
	<td width='5%' class="text-center">4.</td>
		<td>Akses Reset Password</td>
		<td width='20%'>
			{!! Form::select('config_password_frontend', ['1' => 'show', 0 => 'hide'], SV::get('config_password_frontend'), ['id' => 'value_config_password_frontend']) !!}			
		</td>

		<td width='5%'>
			{!! Action::update_variable('4', 'config_password_frontend') !!}
		</td>
	</tr>
<table class="table table-bordered table-hover">
  
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





</table>
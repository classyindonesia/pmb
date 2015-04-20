    <tr>
    <td width='5%' class="text-center">9.</td>
        <td>Config Show/Hide pendaftaran online</td>
        <td width='20%'>
            {!! Form::select('show_pendaftaran_online_public', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('show_pendaftaran_online_public'), ['id' => 'value_show_pendaftaran_online_public']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('9', 'show_pendaftaran_online_public') !!}
        </td>
    </tr>
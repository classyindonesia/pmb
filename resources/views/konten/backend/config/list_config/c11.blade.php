    <tr>
    <td width='5%' class="text-center">11.</td>
        <td>Config Show/Hide list file</td>
        <td width='20%'>
            {!! Form::select('show_list_file_public', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('show_list_file_public'), ['id' => 'value_show_list_file_public']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('11', 'show_list_file_public') !!}
        </td>
    </tr>
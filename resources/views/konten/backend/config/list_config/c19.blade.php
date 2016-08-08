
    <tr>
    <td width='5%' class="text-center">19.</td>
        <td> 
            Show/Hide menu kartu pendaftaran lvl camaba
         </td>
        <td width='20%'>
            {!! Form::select('show_menu_kartu_pendaftaran_camaba', ['1' => 'Show', '0' => 'Hide'], SV::get('show_menu_kartu_pendaftaran_camaba'), ['id' => 'value_show_menu_kartu_pendaftaran_camaba']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('19', 'show_menu_kartu_pendaftaran_camaba') !!}
        </td>
    </tr>
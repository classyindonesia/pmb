
    <tr>
    <td width='5%' class="text-center">18.</td>
        <td> 
            Show/Hide menu validasi pendaftaran lvl camaba
         </td>
        <td width='20%'>
            {!! Form::select('show_menu_validasi_pendaftaran_camaba', ['1' => 'Show', '0' => 'Hide'], SV::get('show_menu_validasi_pendaftaran_camaba'), ['id' => 'value_show_menu_validasi_pendaftaran_camaba']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('18', 'show_menu_validasi_pendaftaran_camaba') !!}
        </td>
    </tr>
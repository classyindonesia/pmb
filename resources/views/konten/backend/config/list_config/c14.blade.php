    <tr>
    <td width='5%' class="text-center">14.</td>
        <td>Config Show/Hide Menu Validasi Biodata level camaba</td>
        <td width='20%'>
            {!! Form::select('show_menu_validasi_biodata_camaba', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('show_menu_validasi_biodata_camaba'), ['id' => 'value_show_menu_validasi_biodata_camaba']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('14', 'show_menu_validasi_biodata_camaba') !!}
        </td>
    </tr>
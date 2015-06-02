    <tr>
    <td width='5%' class="text-center">13.</td>
        <td>Config Show/Hide Menu Polling level camaba</td>
        <td width='20%'>
            {!! Form::select('show_menu_polling_camaba', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('show_menu_polling_camaba'), ['id' => 'value_show_menu_polling_camaba']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('13', 'show_menu_polling_camaba') !!}
        </td>
    </tr>
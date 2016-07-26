
    <tr>
    <td width='5%' class="text-center">16.</td>
        <td>Show/Hide menu tambahan </td>
        <td width='20%'>
            {!! Form::select('show_menu_tambahan_frontend', ['1' => 'show', '0' => 'hide'], SV::get('show_menu_tambahan_frontend'), ['id' => 'value_show_menu_tambahan_frontend']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('16', 'show_menu_tambahan_frontend') !!}
        </td>
    </tr>
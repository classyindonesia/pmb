
    <tr>
    <td width='5%' class="text-center">20.</td>
        <td> 
            Show/Hide menu Informasi lvl camaba
         </td>
        <td width='20%'>
            {!! Form::select('show_menu_informasi_camaba', ['1' => 'Show', '0' => 'Hide'], SV::get('show_menu_informasi_camaba'), ['id' => 'value_show_menu_informasi_camaba']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('20', 'show_menu_informasi_camaba') !!}
        </td>
    </tr>
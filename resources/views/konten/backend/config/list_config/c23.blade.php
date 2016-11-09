

    <tr>
    <td width='5%' class="text-center">23.</td>
        <td> 
            Show/Hide Isian Pendaftaran - level camaba
         </td>
        <td width='20%'>
            {!! Form::select('show_isian_pendaftaran_camaba', ['1' => 'Show', '0' => 'Hide'], SV::get('show_isian_pendaftaran_camaba'), ['id' => 'value_show_isian_pendaftaran_camaba']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('23', 'show_isian_pendaftaran_camaba') !!}
        </td>
    </tr>
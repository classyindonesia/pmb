    <tr>
    <td width='5%' class="text-center">10.</td>
        <td>Config show/hide slide utama</td>
        <td width='20%'>
            {!! Form::select('show_slide_utama_public', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('show_slide_utama_public'), ['id' => 'value_show_slide_utama_public']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('10', 'show_slide_utama_public') !!}
        </td>
    </tr>
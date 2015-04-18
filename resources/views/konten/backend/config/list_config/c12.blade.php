    <tr>
    <td width='5%' class="text-center">12.</td>
        <td>Config Show/Hide Foto Slide</td>
        <td width='20%'>
            {!! Form::select('show_slide_public', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('show_slide_public'), ['id' => 'value_show_slide_public']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('12', 'show_slide_public') !!}
        </td>
    </tr>
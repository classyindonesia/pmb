
    <tr>
    <td width='5%' class="text-center">22.</td>
        <td> 
            Show/Hide Gallery Frontend
         </td>
        <td width='20%'>
            {!! Form::select('show_gallery_frontend', ['1' => 'Show', '0' => 'Hide'], SV::get('show_gallery_frontend'), ['id' => 'value_show_gallery_frontend']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('22', 'show_gallery_frontend') !!}
        </td>
    </tr>
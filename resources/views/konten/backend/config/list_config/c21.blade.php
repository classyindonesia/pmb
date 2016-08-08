
    <tr>
    <td width='5%' class="text-center">21.</td>
        <td> 
            Show/Hide Statistik Frontend
         </td>
        <td width='20%'>
            {!! Form::select('show_statistik_frontend', ['1' => 'Show', '0' => 'Hide'], SV::get('show_statistik_frontend'), ['id' => 'value_show_statistik_frontend']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('21', 'show_statistik_frontend') !!}
        </td>
    </tr>
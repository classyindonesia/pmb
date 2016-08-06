
    <tr>
    <td width='5%' class="text-center">17.</td>
        <td> 
            Enable/Disable generate NPM otomatis
            <i class='fa fa-question-circle' data-toggle='tooltip' title="generate npm otomatis ketika camaba melakukan validasi!"></i>
         </td>
        <td width='20%'>
            {!! Form::select('generate_npm_validasi', ['1' => 'Enable', '0' => 'Disable'], SV::get('generate_npm_validasi'), ['id' => 'value_generate_npm_validasi']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('17', 'generate_npm_validasi') !!}
        </td>
    </tr>
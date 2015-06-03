
    <tr>
    <td width='5%' class="text-center">15.</td>
        <td>SMS Notifikasi Validasi Biodata level camaba</td>
        <td width='20%'>
            {!! Form::select('sms_validasi_biodata_camaba', ['1' => 'aktif', 0 => 'tidak aktif'], SV::get('sms_validasi_biodata_camaba'), ['id' => 'value_sms_validasi_biodata_camaba']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('15', 'sms_validasi_biodata_camaba') !!}
        </td>
    </tr>
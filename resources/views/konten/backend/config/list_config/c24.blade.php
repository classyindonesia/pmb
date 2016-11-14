

    <tr>
    <td width='5%' class="text-center">24.</td>
        <td> 
            Jumlah berita di halaman depan
         </td>
        <td width='20%'>
            {!! Form::text('jml_berita_frontend', SV::get('jml_berita_frontend'), ['id' => 'value_jml_berita_frontend', 'class' => 'form-control']) !!}            
        </td>

        <td width='5%'>
            {!! Action::update_variable('24', 'jml_berita_frontend') !!}
        </td>
    </tr>
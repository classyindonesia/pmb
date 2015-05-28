

  <div class="form-group">
  	{!! Form::label('alamat_email', 'Alamat Email : ') !!}
  	<input type="text" readonly="0" placeholder='Alamat Email...' id="alamat_email" name='alamat_email' value="{!! $biodata->alamat_email !!}" class="form-control" />
  </div>


  <div class="form-group">
    {!! Form::label('alamat_fb', 'Alamat FB : ') !!}
    <input type="text" id="alamat_fb" name='alamat_fb' value="{!! $biodata->mst_biodata->alamat_fb !!}" placeholder='Alamat FB...' class="form-control" />
  </div>


   <div class="form-group">
    {!! Form::label('no_telepon', 'Nomor Telepon : ') !!}
    <input type="number" name='no_telepon' id='no_telepon' value="{!! $biodata->mst_biodata->no_telepon !!}"  placeholder='Nomor Telepon...' class="form-control" />
  </div>
  
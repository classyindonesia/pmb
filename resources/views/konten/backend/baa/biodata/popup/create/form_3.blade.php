

  <div class="form-group">
  	{!! Form::label('alamat_email', 'Alamat Email : ') !!}
  	<input type="text" readonly="0" name='alamat_email' value="{!! $biodata->alamat_email !!}" class="form-control" />
  </div>


  <div class="form-group">
    {!! Form::label('alamat_fb', 'Alamat FB : ') !!}
    <input type="text" name='alamat_fb' value="" class="form-control" />
  </div>

   <div class="form-group">
    {!! Form::label('alamat_twitter', 'Alamat Twitter : ') !!}
    <input type="text" name='alamat_twitter' value="" class="form-control" />
  </div>


   <div class="form-group">
    {!! Form::label('no_hp', 'Nomor HP : ') !!}
    <input type="number" name='no_hp' value="{!! $biodata->no_hp !!}" class="form-control" />
  </div>


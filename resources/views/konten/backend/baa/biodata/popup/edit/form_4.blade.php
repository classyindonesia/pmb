   <div class="form-group">
    {!! Form::label('alamat_twitter', 'Alamat Twitter : ') !!}
    <input type="text" id="alamat_twitter" name='alamat_twitter' value="{!! $biodata->mst_biodata->alamat_twitter !!}" placeholder='Alamat Twitter...' class="form-control" />
  </div>


   <div class="form-group">
    {!! Form::label('no_hp', 'Nomor HP : ') !!}
    <input type="number" name='no_hp' id='no_hp' value="{!! $biodata->mst_biodata->no_hp !!}" placeholder='Nomor HP...' class="form-control" />
  </div>

 
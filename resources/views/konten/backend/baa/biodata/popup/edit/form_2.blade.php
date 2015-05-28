<div class="form-group">
	{!! Form::label('tempat_lahir', 'tempat lahir : ') !!}
	<input type="text" id="tempat_lahir" name='tempat_lahir' value="{!! $biodata->mst_biodata->tempat_lahir !!}" class="form-control" />
</div>




  
<div class="form-group">
  {!! Form::label('jml_saudara', 'Jumlah Saudara : ') !!}
  <input type="text" name='jml_saudara' id="jml_saudara" value="{!! $biodata->mst_biodata->jml_saudara !!}" placeholder='Jumlah saudara...' class="form-control" />
</div>


<div class="form-group">
  {!! Form::label('anak_ke', 'Anak Ke : ') !!}
  <input type="text" name='anak_ke' id="anak_ke" value="{!! $biodata->mst_biodata->anak_ke !!}" class="form-control" placeholder='anak ke..'  />
</div>
 
 
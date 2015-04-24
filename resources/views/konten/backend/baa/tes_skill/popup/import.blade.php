<script type="text/javascript">
	$(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>

<h1>Import Data Mahasiswa</h1>
<hr>
{!! Form::open(array('route' => 'baa_tes_skill.do_import', 'files' => true)) !!}

 {!! Form::file('userfile') !!} <br>

 <div class='form-group'>
	{!! Form::label('ref_tes_skill_id', 'Skill : ') !!}
	{!! Form::select('ref_tes_skill_id', $ref_skill, '', ['id' => 'ref_tes_skill_id']) !!}
</div>
  
 <button class='btn btn-success' id='import' type='submit'> <i class='fa fa-cloud-upload'></i> upload</button>

 <a class='btn btn-success' href="{!! URL::to('template_import/mahasiswa_tes_skill.xls') !!}"> <i class='fa fa-th-list'></i> template import</a>


{!! Form::close() !!}

<script type="text/javascript">
$('#import').click(function(){
	ref_tes_skill_id = $('#ref_tes_skill_id').val();
	if(ref_tes_skill_id == ''){
		return false;
	}	
})


</script>
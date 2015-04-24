<script type="text/javascript">
	$(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>

<h1>Import Data Pengumuman</h1>
<hr>
{!! Form::open(array('route' => 'pengumuman.do_import', 'files' => true)) !!}

 {!! Form::file('userfile') !!} <br>

  
 <button class='btn btn-success' id='import' type='submit'> <i class='fa fa-cloud-upload'></i> upload</button>

 <a class='btn btn-success' href="{!! URL::to('template_import/pengumuman.xls') !!}"> <i class='fa fa-th-list'></i> template import</a>


{!! Form::close() !!}
 
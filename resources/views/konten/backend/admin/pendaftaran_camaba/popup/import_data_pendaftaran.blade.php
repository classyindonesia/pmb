<script type="text/javascript">
	$(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>


<h1>
    <i class='fa fa-cloud-upload'></i> Import Data Pendaftaran
</h1>
    <hr>



 <div id="pesan"></div>


    {!! Form::open(array('route' => 'admin_data_pendaftaran.do_import_data_pendaftaran', 'files' => true)) !!}
    {!! Form::file('userfile') !!} <br>
    <button class='btn btn-success' id='import' type='submit'> <i class='fa fa-cloud-upload'></i> import</button>
    <a class='btn btn-success' href="/template_import/pendaftaran.xls"> <i class='fa fa-th-list'></i> template import</a>
    {!! Form::close() !!}



<script type="text/javascript">
  

@if(!File::isWritable(storage_path('logs')))
		$('#pesan').html('<div class="alert alert-danger">masalah pada permision folder <b>/storage/logs</b> </div>')
		$('#import').attr('disabled', 'disabled');

@endif


</script>


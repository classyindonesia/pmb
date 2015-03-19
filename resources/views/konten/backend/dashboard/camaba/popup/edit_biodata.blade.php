<script src="/js/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="/js/plugins/bootstrap-select/css/bootstrap-select.min.css">

	<style type="text/css">
	  .ui-effects-transfer {
	    border: 1px dotted black;
	  }
	</style>


 <script type="text/javascript">
 $('.selectpicker').selectpicker();
</script>


<h3>Edit Biodata</h3>
<hr>
<div id='pesan'></div>



@include('konten.backend.dashboard.camaba.popup.form_edit_kiri')
@include('konten.backend.dashboard.camaba.popup.form_edit_kanan')
<button id='simpan' class='btn btn-info form-control' style='font-size:35px;height:70px'> <i class='fa fa-floppy-o'></i> SIMPAN</button>

@include('konten.backend.dashboard.camaba.popup.edit_script')

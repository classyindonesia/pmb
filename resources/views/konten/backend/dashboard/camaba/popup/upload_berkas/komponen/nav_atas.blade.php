<h1>Upload Data Berkas</h1>
<hr>
<ul class="nav nav-tabs">
  
  <li role="presentation" id='ijazah' @if(isset($ijazah_home))  class="active" @endif >
  	<a href="#">Ijazah</a>
  </li>

  <li role="presentation" id='surat_keterangan_lulus' @if(isset($surat_keterangan_home))  class="active" @endif >
  	<a href="#">Surat Keterangan Kelulusan</a>
  </li>

</ul>

<hr>

<script type="text/javascript">
$('#ijazah').click(function(){
	$('.modal-body').load('{!! route("camaba.upload_berkas") !!}');
	return false;
});

$('#surat_keterangan_lulus').click(function(){
	$('.modal-body').load('{!! route("camaba.upload_surat_keterangan_lulus") !!}');
	return false;
});


</script>
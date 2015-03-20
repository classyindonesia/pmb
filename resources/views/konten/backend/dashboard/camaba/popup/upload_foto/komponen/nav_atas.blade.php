<h1>Upload Foto</h1>

<hr>

<ul class="nav nav-tabs">

  <li id='upload_foto' role="presentation" @if(isset($upload_foto_home)) class="active" @endif >
  		<a href="#">Upload Foto</a>
  </li>

  <li id='upload_webcam' role="presentation" @if(isset($upload_webcam_home)) class="active" @endif>
  	<a href="#"> Ambil Foto dr Webcam </a>
  </li>

</ul>
<hr>

<script type="text/javascript">
$('#upload_foto').click(function(){
	$('.modal-body').load('{!! route("camaba.upload_foto") !!}');
	return false;
});

$('#upload_webcam').click(function(){
	$('.modal-body').load('{!! route("camaba.ambil_foto_webcam") !!}')
	return false;
})

</script>


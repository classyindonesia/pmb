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


<h3>Edit Prodi</h3>
<hr>
<div id='pesan'></div>


<div class='col-md-6'>
 	<div class='form-group'>
		{!! Form::label("ref_prodi_id1", 'Prodi pilihan 1 :') !!} <br>
		{!! Form::select('ref_prodi_id1',  Fungsi::get_dropdown($prodi, 'prodi 1'), $b->ref_prodi_id1, ['id' => 'ref_prodi_id1', 'class' => 'selectpicker', 'data-live-search' => 'true']) !!}
	</div>
</div>

<div class='col-md-6'>
	<div class='form-group'>
		{!! Form::label("ref_prodi_id2", 'Prodi pilihan 2 :') !!} <br>
		{!! Form::select('ref_prodi_id2',  Fungsi::get_dropdown($prodi, 'prodi 2'), $b->ref_prodi_id2, ['id' => 'ref_prodi_id2', 'class' => 'selectpicker', 'data-live-search' => 'true']) !!}
	</div>
</div>


<button id='simpan' class='btn btn-info form-control' style='font-size:35px;height:70px'> <i class='fa fa-floppy-o'></i> SIMPAN</button>


<script type="text/javascript">

$('#pesan').click(function(){

	$('#pesan').fadeOut('slow', function(){
		$('#pesan').html('')
			.fadeIn()
			.removeClass('alert alert-danger animated shake');
	});
})


$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');

ref_prodi_id1 = $('#ref_prodi_id1').val();
ref_prodi_id2 = $('#ref_prodi_id2').val();
 

if(ref_prodi_id1 != ''){
	if(ref_prodi_id1 == ref_prodi_id2){
		$('#pesan').html('<div class="alert alert-danger">prodi tidak boleh sama!</div>');
		return false;
	}	
}


 

form_data ={
	jenis_daftar : '{!! $jenis_daftar !!}',
	ref_prodi_id2 : ref_prodi_id2,
	ref_prodi_id1 : ref_prodi_id1, 
	id : '{!! $b->id !!}',
 	_token : '{!! csrf_token() !!}'
}

$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("camaba.update_prodi") }}',
		data : form_data,
		type : 'post',
		error:function(xhr, status, error){
 

			$('#simpan').removeAttr('disabled');
	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });

		      //    alert('error! terjadi kesalahan pada sisi server!')
		},
		success:function(ok){
			alert('data telah tersimpan');
			  window.location.reload();
		}
	})
})
</script>
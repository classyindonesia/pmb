<script>


//pilih jenis pendaftaran
$('#jenis_pendaftaran').change(function(){
    jp = $('#jenis_pendaftaran').val();

    if(jp == 'transfer'){
        $('#pilih_pt').fadeIn();
    }else{
        $('#pilih_pt').fadeOut();
        $('#ref_perguruan_tinggi_id').val('');
    }
});







$('#pesan').click(function(){
	$('#pesan').fadeOut('slow', function(){
		$('#pesan').html('').show().removeClass('alert alert-danger animated shake');
	});
});


  $(function () {
    $('#myTab a:first').tab('show')
  })



$('#simpan').click(function(){
    @include($base_view.'popup.komponen.value_post_script')

 

$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("backend_biodata.update") }}',
		data : form_data,
		type : 'post',
		error:function(xhr, status, error){
			$('#simpan').removeAttr('disabled');

	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });
		},
		success:function(ok){
			 window.location.reload();
		}
	});

});




@include($base_view.'popup.komponen.input_int_only')

@include($base_view.'popup.komponen.global_script')




</script>
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

	@include($base_view.'popup.edit.script.value')


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









//input untuk int only
 $('#jml_saudara').keypress(function(e) {
        var a = [];
        var k = e.which;

        for (i = 48; i < 58; i++)
        a.push(i);
        a.push(8);
        if (!(a.indexOf(k)>=0))
            e.preventDefault();
        }); 
 $('#anak_ke').keypress(function(e) {
        var a = [];
        var k = e.which;

        for (i = 48; i < 58; i++)
        a.push(i);
        a.push(8);
        if (!(a.indexOf(k)>=0))
            e.preventDefault();
        }); 

 $('#no_hp').keypress(function(e) {
        var a = [];
        var k = e.which;

        for (i = 48; i < 58; i++)
        a.push(i);
        a.push(8);
        if (!(a.indexOf(k)>=0))
            e.preventDefault();
        }); 



 $('#no_hp_ortu').keypress(function(e) {
        var a = [];
        var k = e.which;

        for (i = 48; i < 58; i++)
        a.push(i);
        a.push(8);
        if (!(a.indexOf(k)>=0))
            e.preventDefault();
        }); 

 $('#no_identitas').keypress(function(e) {
        var a = [];
        var k = e.which;

        for (i = 48; i < 58; i++)
        a.push(i);
        a.push(8);
        if (!(a.indexOf(k)>=0))
            e.preventDefault();
        }); 



 $('#tahun_lulus').keypress(function(e) {
        var a = [];
        var k = e.which;

        for (i = 48; i < 58; i++)
        a.push(i);
        a.push(8);
        if (!(a.indexOf(k)>=0))
            e.preventDefault();
        }); 

</script>
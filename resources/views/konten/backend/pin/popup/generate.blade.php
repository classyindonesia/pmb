<script type="text/javascript">
$(document).ready(function() {
    $("#jml_pin").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});

</script>

<h3>Generate PIN Pendaftaran</h3>
<hr style='margin:2px;'>


<div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('jml_pin', 'Jumlah Pin : ') !!}
	<input type='text' name='jml_pin' placeholder='Jumlah Pin...' id='jml_pin' class='form-control'>
</div>

 

 <div class='form-group'>
 	<button id='generate' class='btn btn-info'><i class='fa fa-random'></i> GENERATE</button>
</div>



<script type="text/javascript">
$('#generate').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
jml_pin = $('#jml_pin').val();
jml_pin = parseInt(jml_pin);
if(jml_pin > 2000){
	alert('jumlah pin tdk boleh lebih dr 2rb dalam sekali generate!');
	return false;
}
 

form_data ={
	jml_pin : jml_pin,
 	_token : '{!! csrf_token() !!}'
}
$('#jml_pin').attr('readonly', '1');

$('#generate').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("admin_pin.do_generate") }}',
		data : form_data,
		type : 'post',
		error:function(xhr, status, error){
			$('#generate').removeAttr('disabled');
	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
       		$('#pesan').append(index + ": " + value+"<br>")
          });
        $('#jml_pin').removeAttr('readonly');

		      //    alert('error! terjadi kesalahan pada sisi server!')
		},
		success:function(ok){
			alert('pin telah ditambahkan!');
			 window.location.reload();
		}
	})
})
</script>

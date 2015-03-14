<script type="text/javascript">
$(document).ready(function() {
    $("#biaya").keydown(function (e) {
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


<h3>Tambah Gelombang Pendaftaran</h3>
<hr style='margin:2px;'>


<div id='pesan'></div>



<div class='form-group'>
	{!! Form::label('nama', 'Nama Gelombang Pendaftaran : ') !!}
	<input type='text' name='nama' placeholder='nama Gelombang Pendaftaran...' id='nama' class='form-control'>
</div>

 



<div class='form-group'>
	{!! Form::label('biaya', 'Biaya Pendaftaran : ') !!}
	<input type='text' name='biaya' placeholder='Biaya Pendaftaran...' id='biaya' class='form-control'>
</div>



<div class='form-group'>
	{!! Form::label('ref_thn_ajaran_id', 'Tahun Ajaran : ') !!}
	{!! Form::select('ref_thn_ajaran_id', Fungsi::get_dropdown($ref_thn_ajaran, 'tahun ajaran'), '', ['id' => 'ref_thn_ajaran_id']) !!}
</div>





 <div class='form-group'>
 	<button id='simpan' class='btn btn-info'><i class='fa fa-floppy-o'></i> simpan</button>
</div>



<script type="text/javascript">
$('#simpan').click(function(){
	$('#pesan').removeClass('alert alert-danger animated shake').html('');
nama = $('#nama').val();
 if(nama == ''){
	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
	$('#pesan').append('semua isian harus terisi!');
}

biaya = $('#biaya').val();
ref_thn_ajaran_id = $('#ref_thn_ajaran_id').val();


form_data ={
	nama : nama,
	biaya : biaya,
	ref_thn_ajaran_id : ref_thn_ajaran_id,
 	_token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
	$.ajax({
		url : '{{ URL::route("ref_gelombang.store") }}',
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
			 window.location.reload();
		}
	})
})
</script>

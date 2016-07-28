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





//menangani inputan SMA
$('#ref_sma_id').change(function(){
	input_sma = $('#ref_sma_id').val();
	if(input_sma == 9999){
		$('#input_keterangan_sma').fadeIn();
	}else{
		$('#input_keterangan_sma').fadeOut();
		$('#keterangan_sma').val('');
	}
})
$(document).ready(function(){
	input_sma = $('#ref_sma_id').val();
	if(input_sma == 9999){
		$('#input_keterangan_sma').fadeIn();
	}
})
//end



//menangani inputan : pilih jenis pendaftaran
$('#jenis_pendaftaran').change(function(){
    jp = $('#jenis_pendaftaran').val();

    if(jp == 'transfer'){
        $('#pilih_pt').fadeIn();
    }else{
        $('#pilih_pt').fadeOut();
        $('#ref_perguruan_tinggi_id').val('');
        $('#dropdown_ref_prodi_pt').html('');
    }
});


$('#ref_perguruan_tinggi_id').change(function(){
	input_ref_perguruan_tinggi = $('#ref_perguruan_tinggi_id').val();
	if(input_ref_perguruan_tinggi == 9999){
		$('#ket_pt').fadeIn();
	}else{
		$('#ket_pt').fadeOut();
		$('#keterangan_perguruan_tinggi').val('');
	}
})
$(document).ready(function(){
	input_ref_perguruan_tinggi = $('#ref_perguruan_tinggi_id').val();
	if(input_ref_perguruan_tinggi == 9999){
		$('#ket_pt').fadeIn();
	}
})
//end



$(function () { $("[data-toggle='tooltip']").tooltip(); });



//menangani inputan status transfer->pilih prodi perguruan tinggi

function get_dropdown_prodi_pt(ref_pt_id){
	$.ajax({
			url : '{!! route("backend_biodata.get_prodi_pt", [null, null])  !!}/'+ref_pt_id+'/{!! $biodata->id !!}',
			type : 'get',
			error:function(err){
				alert('terjadi kesalahan pada sisi server');
			},
			success:function(ok){
				$('#dropdown_ref_prodi_pt').html(ok);
			}
		});
}

$('#ref_perguruan_tinggi_id').change(function(){
	input_pt = $('#ref_perguruan_tinggi_id').val();
	if(input_pt != ''){
 		get_dropdown_prodi_pt(input_pt);	
	}else{
		$('#dropdown_ref_prodi_pt').html('');
	}
})
$(document).ready(function(){
	input_pt = $('#ref_perguruan_tinggi_id').val();
	if(input_pt != ''){

		get_dropdown_prodi_pt(input_pt);

		$('#pilih_pt').fadeIn();


	}
})
//end
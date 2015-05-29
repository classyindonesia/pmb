
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




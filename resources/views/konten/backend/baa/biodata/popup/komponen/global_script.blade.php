$('#ref_sma_id').change(function(){
	input_sma = $('#ref_sma_id').val();
	if(input_sma == 9999){
		$('#input_keterangan_sma').fadeIn();
	}else{
		$('#input_keterangan_sma').fadeOut();
		$('#keterangan_sma').val('');
	}
})


$(function () { $("[data-toggle='tooltip']").tooltip(); });



$(document).ready(function(){
	input_sma = $('#ref_sma_id').val();
	if(input_sma == 9999){
		$('#input_keterangan_sma').fadeIn();
	}
})
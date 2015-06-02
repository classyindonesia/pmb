 if(ref_sma_id == 9999){
 	if(keterangan_sma == ''){
 	 	
	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : Asak sekolah tdk boleh kosong</b><br>');

	 	return false;
 	}
 }



  if(ref_perguruan_tinggi_id == 9999){
 	if(keterangan_perguruan_tinggi == ''){
 	 	
	 	$('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : Perguruan Tinggi tdk boleh kosong</b><br>');

	 	return false;
 	}
 }
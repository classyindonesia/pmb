<h1> <i class='fa fa-check-circle-o'></i> Validasi Biodata </h1>
<hr>

<div id='pesan'></div>




@include($base_view.'popup.komponen.nav_atas')

<hr>
<div class="tab-content">

<div role="tabpanel" class="tab-pane fade in active" id="data_pribadi">
  <div class="row">
	  <div class="col-md-6">
		@include($base_view.'popup.edit.form_1')     	
	  </div>
	  <div class="col-md-6">
		@include($base_view.'popup.edit.form_2')     	
	  </div>  	
  </div>
</div>

<div role="tabpanel" class="tab-pane fade" id="informasi_kontak">
	  <div class="row">
		  <div class="col-md-6">
			@include($base_view.'popup.edit.form_3')     	
		  </div>
		  <div class="col-md-6">
			@include($base_view.'popup.edit.form_4')     	
		  </div>  	
	  </div>
  </div>

<div role="tabpanel" class="tab-pane fade" id="informasi_sekolah">
	  <div class="row">
		  <div class="col-md-6">
			@include($base_view.'popup.edit.form_5')     	
		  </div>
		  <div class="col-md-6">
			@include($base_view.'popup.edit.form_6')     	
		  </div>  	
	  </div>
</div>

<div role="tabpanel" class="tab-pane fade" id="informasi_identitas">
	  <div class="row">
		  <div class="col-md-6">
			@include($base_view.'popup.edit.form_7')     	
		  </div>
 	
	  </div>
</div>

<div role="tabpanel" class="tab-pane fade" id="informasi_ortu">
	  <div class="row">
		  <div class="col-md-4">
			@include($base_view.'popup.edit.form_8')     	
		  </div>
		  <div class="col-md-4">
			@include($base_view.'popup.edit.form_9')     	
		  </div> 
		  <div class="col-md-4">
			@include($base_view.'popup.edit.form_10')     	
		  </div> 			  	
	  </div>
</div>



<div role="tabpanel" class="tab-pane fade" id="informasi_kampus">
	  <div class="row">
		  <div class="col-md-6">
			@include($base_view.'popup.edit.form_11')     	
		  </div>
		  <div class="col-md-6">
			@include($base_view.'popup.komponen.info')		  	
		  </div> 			  	
	  </div>
</div>






<div role="tabpanel" class="tab-pane fade" id="informasi_alamat">
	  <div class="row">
		  <div class="col-md-4">
			@include($base_view.'popup.edit.form_12')     	
		  </div>
		  <div class="col-md-4">
		  	@include($base_view.'popup.edit.form_13')   
		  </div> 
		  <div class="col-md-4">
		  	@include($base_view.'popup.edit.form_14')  
		  </div> 			  	
	  </div>
</div>





</div>

 
@include($base_view.'popup.edit.tombol_simpan')     	
@include($base_view.'popup.edit.script')     
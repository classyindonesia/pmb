@include($base_view.'komponen.nav_atas')
<hr>

<div class="tab-content">

  <div role="tabpanel" class="tab-pane  fade in active" id="informasi_pribadi">
		  @include($base_view.'create.informasi_pribadi')
  	</div>


   <div role="tabpanel" class="tab-pane fade" id="kontak">
		  @include($base_view.'create.kontak')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="alamat">
		  @include($base_view.'create.alamat')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_sekolah">
		  @include($base_view.'create.informasi_sekolah')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="identitas">
		  @include($base_view.'create.identitas')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_ortu">
		  @include($base_view.'create.informasi_ortu')   
   </div>

</div>


@include($base_view.'komponen.global_script') 









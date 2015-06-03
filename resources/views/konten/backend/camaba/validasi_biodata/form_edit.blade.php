@include($base_view.'komponen.nav_atas')
<hr>

<div class="tab-content">

  <div role="tabpanel" class="tab-pane  fade in active" id="informasi_pribadi">
		  @include($base_view.'edit.informasi_pribadi')
  	</div>


   <div role="tabpanel" class="tab-pane fade" id="kontak">
		  @include($base_view.'edit.kontak')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_alamat">
		  @include($base_view.'edit.alamat')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_sekolah">
		  @include($base_view.'edit.informasi_sekolah')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="identitas">
		  @include($base_view.'edit.identitas')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_ortu">
		  @include($base_view.'edit.informasi_ortu')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="kampus">
		  @include($base_view.'edit.kampus')   
   </div>

</div>

@include($base_view.'edit.script')
@include($base_view.'komponen.global_script') 



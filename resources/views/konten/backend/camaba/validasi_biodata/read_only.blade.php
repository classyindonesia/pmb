@include($base_view.'komponen.nav_atas')
<hr>

<div class="tab-content">

  <div role="tabpanel" class="tab-pane  fade in active" id="informasi_pribadi">
      @include($base_view.'read.informasi_pribadi')
    </div>


   <div role="tabpanel" class="tab-pane fade" id="kontak">
      @include($base_view.'read.kontak')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_alamat">
      @include($base_view.'read.alamat')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_sekolah">
      @include($base_view.'read.informasi_sekolah')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="identitas">
      @include($base_view.'read.identitas')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="informasi_ortu">
      @include($base_view.'read.informasi_ortu')   
   </div>

   <div role="tabpanel" class="tab-pane fade" id="kampus">
      @include($base_view.'read.kampus')   
   </div>

</div>

@include($base_view.'read.script')
@include($base_view.'komponen.global_script') 



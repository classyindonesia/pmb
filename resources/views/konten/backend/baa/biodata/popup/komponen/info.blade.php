<h4>
Prodi diterima 
: 
@if(count($biodata->mst_pengumuman->ref_prodi)>0)
   {!! $biodata->mst_pengumuman->ref_prodi->nama !!}
@else
  -
@endif
 </h4>


 <h4>
Status Daftar Ulang 
: 
@if(count($biodata->mst_pengumuman->ref_status_daftar_ulang)>0)
   {!! $biodata->mst_pengumuman->ref_status_daftar_ulang->nama !!}
@else
  -
@endif
 </h4>
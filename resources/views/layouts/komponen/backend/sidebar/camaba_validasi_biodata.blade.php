@if(count($pengumuman) >0)
	<li @if(isset($validasi_biodata_home)) class="active" @endif>
	  <a href="{!! route('backend_validasi_biodata.index') !!}"> 
	    <i class="fa fa-check"></i> Validasi Biodata  
	  </a>
	</li>
@endif
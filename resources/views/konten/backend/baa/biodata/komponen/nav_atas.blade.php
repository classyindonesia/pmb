<ul class="nav nav-tabs">
  <li role="presentation" @if(isset($biodata_nav_home)) class="active" @endif >
  	<a href="{!! route('backend_biodata.index') !!}">
  		 <i class='fa fa-user'></i> Biodata
  	</a>
  </li>
  <li role="presentation" @if(isset($ref_kota_nav_home)) class="active" @endif  >
  	<a href="{!! route('backend_ref_kota.index') !!}">
  		<i class='fa fa-th-list'></i> Kota
  	</a>
  </li>

  <li role="presentation" @if(isset($ref_agama_nav_home)) class="active" @endif  >
    <a href="{!! route('backend_ref_agama.index') !!}">
      <i class='fa fa-th-list'></i> Agama
    </a>
  </li>


  <li role="presentation" @if(isset($ref_identitas_nav_home)) class="active" @endif  >
    <a href="{!! route('backend_ref_identitas.index') !!}">
      <i class='fa fa-th-list'></i> Identitas
    </a>
  </li>


  <li role="presentation" @if(isset($ref_status_daftar_ulang_nav_home)) class="active" @endif  >
    <a href="{!! route('backend_ref_status_daftar_ulang.index') !!}">
      <i class='fa fa-th-list'></i> Status Daftar Ulang
    </a>
  </li>

  <li role="presentation" @if(isset($ref_ukuran_almamater_nav_home)) class="active" @endif  >
    <a href="{!! route('backend_ref_ukuran_almamater.index') !!}">
      <i class='fa fa-th-list'></i> Ukuran Almamater
    </a>
  </li>


  <li role="presentation" @if(isset($ref_penghasilan_ortu_nav_home)) class="active" @endif  >
    <a href="{!! route('backend_ref_penghasilan_ortu.index') !!}">
      <i class='fa fa-th-list'></i> Penghasilan Ortu
    </a>
  </li>



  <li role="presentation" @if(isset($ref_pekerjaan_ortu_nav_home)) class="active" @endif  >
    <a href="{!! route('backend_ref_pekerjaan_ortu.index') !!}">
      <i class='fa fa-th-list'></i> Pekerjaan Ortu
    </a>
  </li>



</ul>

<hr>
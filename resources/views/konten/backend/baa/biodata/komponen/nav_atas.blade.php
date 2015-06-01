
  


<ul class="nav nav-tabs">
  <li role="presentation" @if(isset($biodata_nav_home)) class="active" @endif >
  	<a href="{!! route('backend_biodata.index') !!}">
  		 <i class='fa fa-user'></i> Biodata
  	</a>
  </li>



  <li 
    role="presentation"  
    class="dropdown 
      @if(
          isset($ref_kota_nav_home)                 || 
          isset($ref_agama_nav_home)                ||
          isset($ref_identitas_nav_home)            ||
          isset($ref_status_daftar_ulang_nav_home)  ||
          isset($ref_ukuran_almamater_nav_home)     ||
          isset($ref_penghasilan_ortu_nav_home)     ||
          isset($ref_pekerjaan_ortu_nav_home)       ||
          isset($ref_perguruan_tinggi_nav_home)     ||
          isset($ref_tinggal_nav_home)              ||
          isset($ref_pendidikan_nav_home)           ||
          isset($ref_transportasi_nav_home)         ||
          isset($ref_prodi_pt_nav_home)
          )
        active 
      @endif 
      "

    >
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
        Data Referensi
        <span class="caret"></span>    
    </a>


      <ul class="dropdown-menu" role="menu" >

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
              <a  href="{!! route('backend_ref_status_daftar_ulang.index') !!}">
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

            <li role="presentation" @if(isset($ref_perguruan_tinggi_nav_home)) class="active" @endif  >
              <a  href="{!! route('backend_ref_perguruan_tinggi.index') !!}">
                <i class='fa fa-th-list'></i> Perguruan Tinggi
              </a>
            </li>


             <li role="presentation" @if(isset($ref_tinggal_nav_home)) class="active" @endif  >
              <a  href="{!! route('backend_ref_tinggal.index') !!}">
                <i class='fa fa-th-list'></i> Jenis Tinggal
              </a>
            </li>


             <li role="presentation" @if(isset($ref_pendidikan_nav_home)) class="active" @endif  >
              <a  href="{!! route('backend_ref_pendidikan.index') !!}">
                <i class='fa fa-th-list'></i> Ref Pendidikan
              </a>
            </li>

             <li role="presentation" @if(isset($ref_transportasi_nav_home)) class="active" @endif  >
              <a  href="{!! route('backend_ref_transportasi.index') !!}">
                <i class='fa fa-th-list'></i> Ref Transportasi
              </a>
            </li>


             <li role="presentation" @if(isset($ref_prodi_pt_nav_home)) class="active" @endif  >
              <a  href="{!! route('backend_ref_prodi_pt.index') !!}">
                <i class='fa fa-th-list'></i> Ref Prodi PT
              </a>
            </li>



      </ul>
  </li>


</ul>






<hr>


 
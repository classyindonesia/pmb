<nav class="nav-sidebar">
    <ul class="nav">

      <li @if(isset($dashboard_home)) class="active" @endif>
          <a href="{!! route('admin_dashboard.index') !!}"> <i class='fa fa-home'></i> Dashboard  </a>
      </li>
 
 
      <li @if(isset($validasi_pendaftaran_home)) class="active" @endif>
          <a href="{!! route('validasi_pendaftaran.index') !!}"> <i class='fa fa-check-square-o'></i> Validasi Pendaftaran  </a>
      </li>

      <li @if(isset($kartu_pendaftaran_home)) class="active" @endif>
          <a href="{!! route('kartu_pendaftaran.index') !!}"> 
          	<i class="fa fa-file-pdf-o"></i> Kartu Pendaftaran  
          </a>
      </li>


      <li @if(isset($informasi_home)) class="active" @endif>
          <a href="{!! route('informasi.index') !!}"> 
            <i class="fa fa-newspaper-o"></i> Informasi  
          </a>
      </li>

      @if(App\Helpers\SetupVariable::get('show_menu_polling_camaba') == 1)
        <li @if(isset($polling_home)) class="active" @endif>
            <a href="{!! route('camaba_polling.index') !!}"> 
              <i class="fa fa-pie-chart"></i> Polling  
            </a>
        </li>
      @endif

@include('layouts.komponen.backend.sidebar.camaba_validasi_biodata')
 



  @include('layouts.komponen.backend.sidebar.global')
 </ul>
</nav>


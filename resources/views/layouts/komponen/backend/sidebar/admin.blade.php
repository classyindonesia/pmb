<nav class="nav-sidebar">
    <ul class="nav">
      <li @if(isset($dashboard_home)) class="active" @endif>
          <a href="{!! route('admin_dashboard.index') !!}"> <i class='fa fa-home'></i> Dashboard  </a>
      </li>

      <li @if(isset($data_pendaftaran_home)) class="active" @endif>
          <a href="{!! route('admin_data_pendaftaran.pendaftaran_camaba') !!}"> <i class='fa fa-th-list'></i> Daftar Pengguna  </a>
      </li>



      <li @if(isset($users_home)) class="active" @endif>
          <a href="{!! route('admin_users.index') !!}"> <i class='fa fa-users'></i> Daftar Pengguna  </a>
      </li>


      <li @if(isset($pin_home)) class="active" @endif>
          <a href="{!! route('admin_pin.index') !!}"> 
              <i class='fa fa-qrcode'></i> PIN Pendaftaran 
          </a>
      </li>



      <li @if(isset($request_pergantian_prodi_home)) class="active" @endif>
          <a href="{!! route('request_pergantian_prodi.index') !!}"> 
              <i class='fa fa-random'></i> Request Pindah Prodi 
          </a>
      </li>


      <li @if(isset($data_ref_global_home)) class="active" @endif>
          <a href="{!! route('admin_ref.index') !!}"> <i class='fa fa-credit-card'></i> Data Referensi  </a>
      </li>


      <li @if(isset($data_upload_home)) class="active" @endif>
          <a href="{!! route('data_upload.index') !!}"> 
              <i class='fa fa-cloud'></i> Data Upload  
          </a>
      </li>


      <li @if(isset($config_home)) class="active" @endif>
          <a href="{!! route('admin_config.index') !!}"> 
              <i class='fa fa-wrench'></i> Config  
          </a>
      </li>



      <li @if(isset($api_akses_home)) class="active" @endif>
          <a href="{!! route('admin_api_akses.index') !!}"> 
              <i class='fa fa-lock'></i> API Akses  
          </a>
      </li>



      <li @if(isset($api_call_home)) class="active" @endif>
          <a href="{!! route('admin_api_call.index') !!}"> 
              <i class='fa fa-puzzle-piece'></i> API Call  
          </a>
      </li>




 </ul>
</nav>


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


 </ul>
</nav>


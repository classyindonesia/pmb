<nav class="nav-sidebar">
    <ul class="nav">

      <li @if(isset($dashboard_home)) class="active" @endif>
          <a href="{!! route('admin_dashboard.index') !!}"> <i class='fa fa-home'></i> Dashboard  </a>
      </li>
 

      <li @if(isset($data_pendaftaran_home)) class="active" @endif>
          <a href="{!! route('baa_data_pendaftaran.pendaftaran_camaba') !!}"> 
            <i class='fa fa-th-list'></i> Pendaftaran  
          </a>
      </li>



      <li @if(isset($tes_tulis_home)) class="active" @endif>
          <a href="{!! route('baa_tes_tulis.index') !!}"> 
            <i class='fa fa-pencil'></i> Tes Tulis  
          </a>
      </li>

  @include('layouts.komponen.backend.sidebar.global')
 </ul>
</nav>


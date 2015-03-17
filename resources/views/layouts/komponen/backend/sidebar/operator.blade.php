<nav class="nav-sidebar">
    <ul class="nav">

      <li @if(isset($dashboard_home)) class="active" @endif>
          <a href="{!! route('admin_dashboard.index') !!}"> <i class='fa fa-home'></i> Dashboard  </a>
      </li>

       <li @if(isset($pendaftaran_home)) class="active" @endif>
          <a href="{!! route('operator_pendaftaran.index') !!}"> <i class='fa fa-street-view'></i> Pendaftaran  </a>
      </li>

 


 </ul>
</nav>


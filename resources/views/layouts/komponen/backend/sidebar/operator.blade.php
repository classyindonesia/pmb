<nav class="nav-sidebar">
    <ul class="nav">

      <li @if(isset($dashboard_home)) class="active" @endif>
          <a href="{!! route('admin_dashboard.index') !!}"> <i class='fa fa-home'></i> Dashboard  </a>
      </li>

       <li @if(isset($pendaftaran_home)) class="active" @endif>
          <a href="{!! route('operator_pendaftaran.index') !!}"> <i class='fa fa-street-view'></i> Pendaftaran Offline </a>
      </li>


       <li @if(isset($list_pendaftaran_home)) class="active" @endif>
          <a href="{!! route('admin_pendaftaran.pendaftaran_camaba') !!}"> <i class='fa fa-group'></i> List Pendaftaran  </a>
      </li>

       <li @if(isset($check_pin_home)) class="active" @endif>
          <a href="{!! route('check_pin.index') !!}"> 
            <i class='fa fa-qrcode'></i> Check Pin Pendaftaran  
          </a>
       </li>

 </ul>
</nav>


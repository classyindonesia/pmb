<nav class="nav-sidebar">
    <ul class="nav">
      <li @if(isset($dashboard_home)) class="active" @endif>
          <a href="{!! route('admin_dashboard.index') !!}"> <i class='fa fa-home'></i> Dashboard  </a>
      </li>


      <li @if(isset($users_home)) class="active" @endif>
          <a href="{!! route('admin_users.index') !!}"> <i class='fa fa-users'></i> Daftar Pengguna  </a>
      </li>



      <li @if(isset($data_ref_global_home)) class="active" @endif>
          <a href="{!! route('admin_ref.index') !!}"> <i class='fa fa-credit-card'></i> Data Referensi  </a>
      </li>



 </ul>
</nav>


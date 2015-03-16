<ul class="nav nav-tabs">
  <li role="presentation" @if(isset($list_api_home)) class="active" @endif>
  	<a href="{!! route('admin_pin.index') !!}"> <i class='fa fa-home'></i> Home</a>
  </li>
  <li role="presentation" @if(isset($api_statistik)) class="active" @endif>
  	<a href="{!! route('admin_pin.statistik') !!}"> <i class="fa fa-bar-chart"></i> Statistik</a>
  </li>

</ul>
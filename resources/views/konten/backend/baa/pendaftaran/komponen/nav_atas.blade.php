<ul class="nav nav-tabs">
  <li role="presentation" @if(isset($pendaftaran_camaba_home))  class="active" @endif >
  	<a href="{!! route('baa_data_pendaftaran.pendaftaran_camaba') !!}">Pendaftaran All</a>
  </li>
 

  <li role="presentation" @if(isset($pendaftaran_camaba_online_home))  class="active" @endif >
  	<a href="{!! route('baa_data_pendaftaran.pendaftaran_camaba_online') !!}">Pendaftaran Online</a>
  </li>


  <li role="presentation" @if(isset($pendaftaran_camaba_offline_home))  class="active" @endif >
  	<a href="{!! route('baa_data_pendaftaran.pendaftaran_camaba_offline') !!}">Pendaftaran Offline</a>
  </li>


</ul>

<hr>
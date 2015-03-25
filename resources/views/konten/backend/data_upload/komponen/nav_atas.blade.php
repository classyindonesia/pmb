<ul class="nav nav-tabs">
  <li role="presentation" @if(isset($upload_foto_home)) class="active" @endif>
  		<a href="{!! route('data_upload.index') !!}">Foto Camaba</a>
  </li>
  <li role="presentation" @if(isset($upload_berkas_home)) class="active" @endif>
  		<a href="{!! route('data_upload.berkas') !!}">Berkas</a>
  </li>



  </ul>
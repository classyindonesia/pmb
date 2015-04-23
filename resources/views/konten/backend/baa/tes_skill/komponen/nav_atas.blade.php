<ul class="nav nav-tabs">
  <li role="presentation" @if(isset($tt_home)) class="active" @endif >
  	<a href="{!! route('baa_tes_tulis.index') !!}"> <i class='fa fa-pencil'></i> Home</a></li>

  <li role="presentation" @if(isset($ref_ruang_home)) class="active" @endif>
  	<a href="{!! route('baa_ref_ruang.index') !!}"><i class='fa fa-th-list'></i> Daftar Ruang</a></li>

</ul>

<hr>
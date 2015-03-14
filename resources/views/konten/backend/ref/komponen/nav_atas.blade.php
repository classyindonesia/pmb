<ul class="nav nav-tabs">

  <li role="presentation" @if(isset($data_ref_home)) class="active" @endif>
  	<a href="{!! route('admin_ref.index') !!}"> Home </a>
  </li>
  
  <li role="presentation" @if(isset($ref_sma_home)) class="active" @endif>
  	<a href="{!! route('ref_sma.index') !!}"> SMA </a>
  </li>
  
 

  <li role="presentation" @if(isset($ref_thn_ajaran_home)) class="active" @endif>
  	<a href="{!! route('ref_thn_ajaran.index') !!}"> Tahun Ajaran </a>
  </li>


  <li role="presentation" @if(isset($ref_gelombang_home)) class="active" @endif>
  	<a href="{!! route('ref_gelombang.index') !!}"> Gelombang </a>
  </li>


  <li role="presentation" @if(isset($ref_prodi_home)) class="active" @endif>
    <a href="{!! route('admin_ref_prodi.index') !!}"> Prodi </a>
  </li>


</ul>

<hr>
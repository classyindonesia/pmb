<ul class="nav nav-tabs">

  <li role="presentation" @if(isset($data_ref_home)) class="active" @endif>
  	<a href="{!! route('admin_ref.index') !!}"> Home </a>
  </li>
  
  <li role="presentation" @if(isset($ref_sma_home)) class="active" @endif>
  	<a href="{!! route('ref_sma.index') !!}"> Ref SMA </a>
  </li>
  
 

  <li role="presentation" @if(isset($ref_thn_ajaran_home)) class="active" @endif>
  	<a href="{!! route('ref_thn_ajaran.index') !!}"> Ref Tahun Ajaran </a>
  </li>


  <li role="presentation" @if(isset($ref_gelombang_home)) class="active" @endif>
  	<a href="{!! route('ref_gelombang.index') !!}"> Ref Gelombang </a>
  </li>



</ul>

<hr>
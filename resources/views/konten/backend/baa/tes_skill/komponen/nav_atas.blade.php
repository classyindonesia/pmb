<ul class="nav nav-tabs">
  <li role="presentation"
  	@if(isset($ts_home)) class="active" @endif>
  		<a href="{!! route('baa_tes_skill.index') !!}">Tes Tulis</a>
  	</li>
  <li role="presentation" @if(isset($rs_home)) class="active" @endif>
  	<a href="{!! route('ref_tes_skill.index') !!}">Ref Tes Skill</a>
  </li>
</ul>

<hr>

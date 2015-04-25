<div class="col-md-6">

 
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class='fa fa-connectdevelop'></i> Tes Skill</h3>
  </div>
  <div class="panel-body">


	<table width="100%">
 
		<tr>
			<td width="50%">No Pendaftaran</td>
			<td> {!! $pendaftaran->no_pendaftaran !!}</td>
		</tr>
		<tr>
			<td>Nama</td>
			<td> {!! $pendaftaran->nama !!}</td>
		</tr>		
		<tr>		
			<td>Ruang</td>
			<td>@if(count($tes_skill)>0) {!! $tes_skill->ref_ruang->nama !!} @else {!! $blm_tersedia !!} @endif </td>
		</tr>

		<tr>		
			<td>Kode Ruang</td>
			<td>@if(count($tes_skill)>0) {!! $tes_skill->ref_ruang->kode_ruang !!} @else {!! $blm_tersedia !!} @endif </td>
		</tr>	

		<tr>		
			<td>Skill</td>
			<td>@if(count($tes_skill)>0) {!! $tes_skill->ref_tes_skill->nama !!} @else {!! $blm_tersedia !!} @endif </td>
		</tr>	

	</table>	


  </div>
</div>
 
</div>
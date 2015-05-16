<div class="col-md-6">

 
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><i class='fa fa-connectdevelop'></i> Tes Skill</h3>
  </div>
  <div class="panel-body">


	<table width="100%">
 <?php $no=1; ?>
 @foreach($tes_skill as $list)

		<tr>		
			<td>Tes skill nomor </td>
			<td> {!! $no !!} </td>
		</tr>



		<tr>		
			<td>Ruang</td>
			<td>@if(count($list->ref_ruang)>0) {!! $list->ref_ruang->nama !!} @else {!! $blm_tersedia !!} @endif </td>
		</tr>

		<tr>		
			<td>Kode Ruang</td>
			<td>@if(count($list->ref_ruang)>0) {!! $list->ref_ruang->kode_ruang !!} @else {!! $blm_tersedia !!} @endif </td>
		</tr>	

		<tr>		
			<td>Skill</td>
			<td>@if(count($list->ref_ruang)>0) {!! $list->ref_tes_skill->nama !!} @else {!! $blm_tersedia !!} @endif </td>
		</tr>

		<tr>		
			<td colspan="2"><hr></td>

		</tr>


<?php $no++; ?>
@endforeach
	</table>	


  </div>
</div>
 
</div>
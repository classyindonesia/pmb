<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th width="160px">No Pendaftaran</th>
			<th>Nama</th>
			<th width="100px">Jumlah Skill</th>
  			<th class="text-center" width="100px">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=$ts->firstItem(); ?>
@foreach($ts as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td> {!! $list->no_pendaftaran !!} </td>
			<td>  {!! $list->nama!!}  </td>
			<td class="text-center">{!! count($list->mst_tes_skill) !!}		 </td>
  			<td class="text-center"> 
  			@include($base_view.'action.list_skill')  
 
			 </td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $ts->render() !!}
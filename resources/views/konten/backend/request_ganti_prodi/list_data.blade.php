<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th width="10%">No Pendaftaran</th>
			<th width="35%">Nama</th>
			<th>Prodi Awal</th>
			<th>Pindah Ke</th>
			<th>Status</th>
			<th width="5%">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no= $data->firstItem(); ?>
@foreach($data as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td> @if(count($list->mst_pendaftaran)>0) {!! $list->mst_pendaftaran->no_pendaftaran !!} @else - @endif </td>

			<td> @if(count($list->mst_pendaftaran)>0) {!! $list->mst_pendaftaran->nama !!} @else - @endif </td>
			<td> @if(count($list->ref_prodi_awal)>0) {!! $list->ref_prodi_awal->nama !!} @else - @endif </td>
			<td> @if(count($list->ref_prodi)>0) {!! $list->ref_prodi->nama !!} @else - @endif </td>
			<td> 
			@if($list->status == 0)
				<span class='label label-warning'>menuggu...</span>
			@elseif($list->status == 1)
				<span class='label label-success'>disetujui</span>
			@else
				<span class='label label-danger'>ditolak</span>
			@endif

			 </td>
 			<td>
 				@include($base_view.'action.edit_request')
 				
 			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>


{!! $data->render() !!}
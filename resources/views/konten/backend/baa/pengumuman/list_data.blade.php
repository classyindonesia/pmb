<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th width="160px">No Pendaftaran</th>
			<th>Nama</th>
			<th>Prodi diterima</th>
  			<th width="100px">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=$pengumuman->firstItem(); ?>
@foreach($pengumuman as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td> @if(count($list->mst_pendaftaran)>0) {!! $list->mst_pendaftaran->no_pendaftaran !!} @else - @endif </td>
			<td> @if(count($list->mst_pendaftaran)>0) {!! $list->mst_pendaftaran->nama !!} @else - @endif </td>
			<td> @if(count($list->ref_prodi)>0) {!! $list->ref_prodi->nama !!} @else - @endif </td>
 			<td> 
			@include($base_view.'action.edit') || 
			@include($base_view.'action.delete')

			 </td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $pengumuman->render() !!}
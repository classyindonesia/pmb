<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th width="160px">No Pendaftaran</th>
			<th>Nama</th>
			<th>Prodi diterima</th>
			<th>Status Daftar Ulang</th>
  			<th width="100px">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=$pengumuman->firstItem(); ?>
@foreach($pengumuman as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td> {!! $list->no_pendaftaran !!}  </td>
			<td> {!! $list->nama !!} </td>
			<td> 
				@if(count($list->mst_pengumuman)>0) 
					@if(count($list->mst_pengumuman->ref_prodi)>0) 
						{!! $list->mst_pengumuman->ref_prodi->nama !!} 
					@else
						-
					@endif
				@else 
					- 
				@endif 
			</td>
			<td>
			
				@if(count($list->mst_pengumuman)>0) 
					@if(count($list->mst_pengumuman->ref_status_daftar_ulang)>0) 
						{!! $list->mst_pengumuman->ref_status_daftar_ulang->nama !!} 
					@else
						-
					@endif
				@else 
					- 
				@endif 
 				 
			</td>
 			<td> 
			@include($base_view.'action.edit') || 
			@include($base_view.'action.delete')

			 </td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $pengumuman->appends(Request::all())->render() !!}
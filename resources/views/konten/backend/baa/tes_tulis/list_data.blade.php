<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th width="160px">No Pendaftaran</th>
			<th>Nama</th>
			<th>Ruangan</th>
			<th>Kode Ruang</th>
			<th width="100px">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=$tt->firstItem(); ?>
@foreach($tt as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>  {!! $list->no_pendaftaran !!}  </td>
			<td>  {!! $list->nama !!}  </td>
			<td>
				@if(count($list->mst_tes_tulis)>0) 
					@if(count($list->mst_tes_tulis->ref_ruang)>0)
						{!! $list->mst_tes_tulis->ref_ruang->nama !!} 
					@else
						-
					@endif
				@else 
					- 
				@endif 
			</td>
			<td>
				@if(count($list->mst_tes_tulis)>0) 
					@if(count($list->mst_tes_tulis->ref_ruang)>0)
						{!! $list->mst_tes_tulis->ref_ruang->kode_ruang !!} 
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

{!! $tt->render() !!}
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="50px">No.</th>
			<th>No Pendaftaran</th>
			<th>Nama</th>
			<th width="150px">Status</th>
			<th>Prodi diterima</th>

			<th class="text-center" width="100px">action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=$biodata->firstItem(); ?>
@foreach($biodata as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td width="150px">{!! $list->no_pendaftaran !!}</td>
			<td>
				@if(count($list->mst_biodata)>0)
					{!! $list->mst_biodata->nama !!}
				@else
					{!! $list->nama !!}
				@endif

			</td>
			<td> 
				@if(count($list->mst_biodata) >0)
					@if($list->mst_biodata->status == 1)
						<span class='label label-success'>tervalidasi</span>
					@else
						<span class='label label-danger'>belum tervalidasi</span>
					@endif
				@else
					<span class='label label-danger'>belum tervalidasi</span>
				@endif
			</td>
			<td>
				@if(count($list->mst_pengumuman->ref_prodi)>0)
					{!! $list->mst_pengumuman->ref_prodi->nama !!}
				@else
					-
				@endif	
			</td>
 			<td class="text-center">
	 			@include($base_view.'action.edit') | 
	 			@include($base_view.'action.validasi')
	 			@include($base_view.'action.cetak_pdf')
 			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>
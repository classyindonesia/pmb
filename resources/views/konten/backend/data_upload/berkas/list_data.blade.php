<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th>Uploader</th>
			<th width="20%">Jenis Berkas</th>
			<th width="20%">Tgl/Jam</th>
			<th width="10%">size</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no = $berkas->firstItem(); ?>
@foreach($berkas as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td> @if(count($list->mst_pendaftaran)>0) {!! $list->mst_pendaftaran->nama !!} @else - @endif 
			</td>
			<td>
				@if(count($list->ref_jenis_berkas)>0) 
					{!! $list->ref_jenis_berkas->nama !!}
				@else
					-
				@endif
			</td>
			<td>
				{!! Fungsi::date_to_tgl(date('Y-m-d', strtotime($list->created_at))).'/ '.date('H:i', strtotime($list->created_at)) !!}
			</td>

			<td> 
			@include($base_view.'check_file_berkas')

			</td>
			<td width="5%">
				@include($base_view.'berkas.action.view')				 
			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $berkas->render() !!}
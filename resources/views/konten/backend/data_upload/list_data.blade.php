<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th>Uploader</th>
			<th width="20%">Tgl/Jam</th>
			<th width="10%">size</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no = $foto->firstItem(); ?>
@foreach($foto as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td> @if(count($list->mst_pendaftaran)>0) {!! $list->mst_pendaftaran->nama !!} @else - @endif </td>
			<td>
				{!! Fungsi::date_to_tgl(date('Y-m-d', strtotime($list->created_at))).'/ '.date('H:i', strtotime($list->created_at)) !!}
			</td>			
			<td>
				@if(file_exists(public_path('upload/foto/'.$list->nama_file_asli)))
					{!! Fungsi::size(
						File::size(public_path('upload/foto/'.$list->nama_file_asli))
						) !!}
				@else
					<span class='text-danger'>file tdk ditemukan</span> 
				@endif
			</td>
			<td width="5%">
				@include($base_view.'action.view')
			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $foto->render() !!}
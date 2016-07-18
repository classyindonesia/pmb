<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width='5px'>No.</th>
			<th>Nama Lampiran</th>
			<th class="text-center" width="80px">Download</th>
			<th class="text-center" width='100px'>size</th>
			<th class="text-center" width='100px'>action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = $lampiran->firstItem(); ?>
@foreach($lampiran as $list)		
		<tr>
			<td class='text-center'>{{ $no }}</td>
			<td> {{ $list->nama }} </td>
			<td class="text-center">{!! Fungsi::restyle_text($list->jml_download) !!}</td>
			<td class="text-center"> {{ Fungsi::size($list->size) }} </td>
			<td class="text-center">
				@include('konten.backend.berita.lampiran.action.download') || 
				@include('konten.backend.berita.lampiran.action.view_detil') || 
				@include('konten.backend.berita.lampiran.action.del')
				
			</td>
		</tr>
		<?php $no++; ?>
@endforeach		
	</tbody>
</table>


{!! $lampiran->render() !!}
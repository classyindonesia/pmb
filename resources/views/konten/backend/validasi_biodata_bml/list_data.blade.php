<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="10px" class="text-center">No.</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>Prodi</th>
			<th>Tgl Validasi</th>
		</tr>
	</thead>
	<tbody>
	@php($no=$validasi_biodata->firstItem())
	@foreach($validasi_biodata as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->fk__mst_pendaftaran_nama !!}</td>
			<td width="150px">{!! $list->npm !!}</td>
			<td width="250px">{!! $list->fk__ref_prodi_bml !!}</td>
			<td width="150px">
				{{ Fungsi::date_to_tgl(date('Y-m-d', strtotime($list->created_at))).' - '.date('H:i', strtotime($list->created_at)) }}
			</td>
		</tr>
		@php($no++)
	@endforeach
	</tbody>
</table>

{!! $validasi_biodata->appends(['search' => \Request::get('search')])->render() !!}
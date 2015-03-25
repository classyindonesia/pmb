<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="5%">No.</th>
			<th width="10%"> no pendaftaran</th>
			<th>Nama</th>
			<th width="15%">Prodi 1</th>
			<th width="15%">Prodi 2</th>
			<th width="10%" class="text-center"> <i class='fa fa-check'></i> Biodata</th>
			<th width="10%" class="text-center"> <i class='fa fa-check'></i> Prodi </th>
			<th width="10%" class="text-center"> <i class='fa fa-check'></i> Berkas </th>
			<th width="5%">Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no=$pendaftaran->firstItem(); ?>
@foreach($pendaftaran as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->no_pendaftaran !!}</td>
			<td>{!! $list->nama !!}</td>
			<td> @if(count($list->ref_prodi1)) {!! $list->ref_prodi1->nama !!} @else - @endif </td>
			<td> @if(count($list->ref_prodi2)) {!! $list->ref_prodi2->nama !!} @else - @endif </td>
			<td></td>
			<td></td>
			<td></td>
			<td>-</td>
		</tr>
<?php $no++; ?>
@endforeach

	</tbody>
</table>

{!! $pendaftaran->render() !!}
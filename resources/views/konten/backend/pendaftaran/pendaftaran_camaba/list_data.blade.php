<table class="table table-bordered table-hover">
	<thead>
		<tr class="well">
			<th class="text-center" width="5%">No.</th>
			<th width="13%"> no pendaftaran</th>
			<th>Nama</th>
			<th width="10%">Jenis Daftar</th>
			<th width="15%">Prodi 1</th>
			<th width="15%">Prodi 2</th>
 			<th width="10%" class="text-center"> <i class='fa fa-check'></i> Foto </th>
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
			<td>
				<!-- 1=online, 0=offline -->
				@if($list->jenis_daftar == 0)
					<span class='label label-warning'>offline</span>
				@else
					<span class='label label-success'>online</span>
				@endif
			</td>
			<td> @if(count($list->ref_prodi1)) {!! $list->ref_prodi1->nama !!} @else - @endif </td>
			<td> @if(count($list->ref_prodi2)) {!! $list->ref_prodi2->nama !!} @else - @endif </td>
 			<td class="text-center ">
 			@include($base_view.'komponen.check_foto')
 			</td>
			<td class="text-center">
	 			@include($base_view.'komponen.check_berkas')
			</td>
			<td class="text-center">	
				@include($base_view.'action.kirim_sms')
			</td>
		</tr>
<?php $no++; ?>
@endforeach

	</tbody>
</table>

{!! $pendaftaran->render() !!}
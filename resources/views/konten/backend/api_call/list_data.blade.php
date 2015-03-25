<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class='text-center' width='5%'>No.</th>
			<th>Nama</th>
			<th>User</th>
			<th>Waktu</th>
			<th class='text-center' width='5%'>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no= $api_call->firstItem(); ?>
@foreach($api_call as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td> @if(count($list->mst_user)>0) {!! $list->mst_user->nama !!} @else - @endif </td>
			<td>{!! Fungsi::date_to_tgl(date('Y-m-d', strtotime($list->created_at))) !!}/ {!! date('H:i:s', strtotime($list->created_at)) !!}</td>
			<td>
				@include('konten.backend.api_call.action')

			</td>
		</tr>
		<?php $no++; ?>
@endforeach

	</tbody>
</table>

{!! $api_call->render() !!}
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%" class="text-center">No.</th>
			<th width="15%">User</th>
			<th>Log</th>
			<th>Tgl</th>
			<th>Jam</th>

		</tr>
	</thead>
	<tbody>
	<?php $no = $log->firstItem(); ?>
@foreach($log as $list)
		<tr>
			<td class="text-center">{{ $no }}</td>
			<td> @if(count($list->mst_user)>0) {!! $list->mst_user->nama !!} @else - @endif </td>
			<td> {!! $list->log !!} </td>
			<td>{!! Fungsi::date_to_tgl(date("Y-m-d", strtotime($list->created_at))) !!}</td>
			<td>{!! date("H:i:s", strtotime($list->created_at)) !!} WIB</td>

		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $log->appends(Request::all())->render() !!}
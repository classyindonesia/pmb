<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="5%">No.</th>
			<th width="15%">User</th>
			<th>Log</th>

		</tr>
	</thead>
	<tbody>
	<?php $no = $log->firstItem(); ?>
@foreach($log as $list)
		<tr>
			<td>{{ $no }}</td>
			<td> @if(count($list->mst_user)>0) {!! $list->mst_user->nama !!} @else - @endif </td>
			<td> {!! $list->log !!} </td>

		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $log->render() !!}
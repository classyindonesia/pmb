<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width='5%' class='text-center'>No.</th>
			<th>User</th>
			<th>Api Key</th>
			<th>Status</th>
			<th width='10%'>Action</th>
		</tr>
	</thead>
	<tbody>
		<tr>

<?php $no=$users->firstItem(); ?>
@foreach($users as $list)
			<td class='text-center'>{!! $no !!}</td>
			<td>@if(count($list->mst_user)>0) {!! $list->mst_user->nama !!} @else - @endif </td>
			<td> {!! $list->api_key !!} </td>
			<td> @if($list->status == 1) 
					<span class='text-success'>aktif</span> 
				@else 
					<span class='text-danger'>tdk aktif</span> 
				@endif
			</td>
			<td>	
				@include('konten.backend.api_akses.action')
				||				
				{!! Action::del(false, route("admin_api_akses.del", $list->id), $list->id); !!}

			</td>
	<?php $no++; ?>
@endforeach
		</tr>
	</tbody>
</table>
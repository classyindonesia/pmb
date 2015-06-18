<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="50px">No.</th>
			<th>Judul Pertanyaan</th>
			<th class="text-center" width="100px">jml pilihan</th>
			<th width="100px" class="text-center">Status</th>
			<th class="text-center" width="150px" >Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no = $polling->firstItem(); ?>
		@foreach($polling as $list)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $list->judul !!}</td>
					<td class="text-center">{!! count($list->mst_pilihan_polling) !!}</td>
					<td class="text-center">
						@if($list->aktif == 1)
							<span class='label label-success'>aktif</span>
						@else
							<span class='label label-danger'>tdk aktif</span>
						@endif
					</td>
					<td class="text-center">
					
					@if(Auth::user()->ref_user_level_id == 1)

						{!! Action::del(false, route("admin_polling.del_pertanyaan", $list->id), $list->id); !!}
						||
						{!! Action::edit(false, route("admin_polling.edit_pertanyaan", $list->id), $list->id) !!}
							@include($base_view.'action.view_pilihan')
						||
					@endif
						@include($base_view.'action.view_hasil')
					</td>
				</tr>
				<?php $no++; ?>
		@endforeach
	</tbody>
</table>


{!! $polling->appends(Request::all())->render() !!}

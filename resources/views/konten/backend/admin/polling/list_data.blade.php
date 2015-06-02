<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="50px">No.</th>
			<th>Judul Pertanyaan</th>
			<th class="text-center" width="100px" >Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no = $polling->firstItem(); ?>
		@foreach($polling as $list)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $list->judul !!}</td>
					<td class="text-center">
				{!! Action::del(false, route("admin_polling.del_pertanyaan", $list->id), $list->id); !!}
			||
				{!! Action::edit(false, route("admin_polling.edit_pertanyaan", $list->id), $list->id) !!}
					@include($base_view.'action.view_pilihan')
					</td>
				</tr>
				<?php $no++; ?>
		@endforeach
	</tbody>
</table>


{!! $polling->render() !!}
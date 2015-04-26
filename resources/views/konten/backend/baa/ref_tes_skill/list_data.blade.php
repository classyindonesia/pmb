<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="50px">No.</th>
			<th>Nama Skill</th>
 			<th width="50px">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=$ref_tes_skill->firstItem(); ?>
@foreach($ref_tes_skill as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
 			<td>
				{!! Action::edit(false, route("ref_tes_skill.edit", $list->id), $list->id) !!}
				||
				{!! Action::rest_del(false, route("ref_tes_skill.destroy", $list->id), $list->id); !!}				
			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>


{!! $ref_tes_skill->render() !!}
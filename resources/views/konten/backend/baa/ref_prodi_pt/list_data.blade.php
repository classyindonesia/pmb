<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="50px" class="text-center">No.</th>
			<th>Nama</th>
			<th>Perguruan Tinggi</th>
			<th width="150px" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no=$ref_prodi_pt->firstItem(); ?>
@foreach($ref_prodi_pt as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td>
				@if(count($list->ref_perguruan_tinggi)>0)
					{!! $list->ref_perguruan_tinggi->nama !!}
				@else
					-
				@endif
			</td>



			<td class="text-center"> 
			{!! Action::rest_del(false, route("backend_ref_prodi_pt.destroy", $list->id), $list->id); !!}
			||
				{!! Action::edit(false, route("backend_ref_prodi_pt.edit", $list->id), $list->id) !!}
			</td>
		</tr>
		<?php $no++; ?>
@endforeach

	</tbody>
</table>

{!! $ref_prodi_pt->render() !!}
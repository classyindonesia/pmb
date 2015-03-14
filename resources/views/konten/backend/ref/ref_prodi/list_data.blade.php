<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th  class='text-center' width='5%'>No</th>
			<th width='10%'>Kode Prodi</th>
			<th>Nama</th>
			<th width='5%'>Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no= $ref_prodi->firstItem(); ?>
@foreach($ref_prodi as $list)
		<tr>
			<td class='text-center'>{!! $no !!}</td>
			<td>{!! $list->kode_prodi !!}</td>
			<td>{!! $list->nama !!}</td>
			<td>
				{!! Action::edit(false, route("admin_ref_prodi.edit", $list->id), $list->id) !!}
				||
				{!! Action::rest_del(false, route("admin_ref_prodi.destroy", $list->id), $list->id); !!}
			</td>
		</tr>
<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $ref_prodi->render() !!}
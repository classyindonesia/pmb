<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th  class='text-center' width='5%'>No</th>
			<th>Nama</th>
			<th width='5%'>Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no= $ref_sma->firstItem(); ?>
@foreach($ref_sma as $list)
		<tr>
			<td class='text-center'>{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td>
				{!! Action::edit(false, route("ref_sma.edit", $list->id), $list->id) !!}
				||
				{!! Action::rest_del(false, route("ref_sma.destroy", $list->id), $list->id); !!}
			</td>
		</tr>
<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $ref_sma->render() !!}
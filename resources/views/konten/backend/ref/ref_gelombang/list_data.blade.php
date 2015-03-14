<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th  class='text-center' width='5%'>No</th>
			<th>Nama</th>
			<th>Tahun Ajaran</th>
			<th>Biaya</th>
			<th width='5%'>Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no= $ref_gelombang->firstItem(); ?>
@foreach($ref_gelombang as $list)
		<tr>
			<td class='text-center'>{!! $no !!}</td>
			<td>{!! $list->nama !!}</td>
			<td>  @if(count($list->ref_thn_ajaran)>0) {!! $list->ref_thn_ajaran->nama !!} @else - @endif </td>
			<td>{!! Fungsi::rupiah($list->biaya) !!}</td>
			<td>
				{!! Action::edit(false, route("ref_gelombang.edit", $list->id), $list->id) !!}
				||
				{!! Action::rest_del(false, route("ref_gelombang.destroy", $list->id), $list->id); !!}
			</td>
		</tr>
<?php $no++; ?>
@endforeach
	</tbody>
</table>

{!! $ref_gelombang->render() !!}
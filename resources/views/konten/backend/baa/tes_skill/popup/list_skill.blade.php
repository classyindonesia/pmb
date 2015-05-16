<h3> Skill Camaba | {!! $camaba->nama !!} </h3>
<hr>

<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="50px" class="text-center">No.</th>
			<th>Skill</th>
			<th width="100px" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no = 1; ?>
@foreach($camaba->mst_tes_skill as $list)
		<tr>
			<td>{!! $no !!}</td>
			<td> @if(count($list->ref_tes_skill)>0) {!! $list->ref_tes_skill->nama !!} @else - @endif </td>
			<td> 
				@include($base_view.'action.edit') || 
				@include($base_view.'action.delete')  
			</td>
		</tr>
		<?php $no++; ?>
@endforeach

	</tbody>
</table>


<script>
$('#myModal').on('hidden.bs.modal', function (e) {
  window.location.reload();
})
</script>
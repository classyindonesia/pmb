<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width='5%' class='text-center;'>No.</th>
			<th>Nama</th>
			<th>Email</th>
			<th width='10%' class='text-center;'>Level</th>
			<th width='5%' class='text-center;'>Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no=$users->firstItem(); ?>
@foreach($users as $list)
		<tr>
			<td class='text-center'>{!! $no !!}</td>
			<td> {!! $list->nama !!} </td>
			<td> {!! $list->email !!} </td>
			<td> @if(count($list->ref_user_level)>0) {!! $list->ref_user_level->nama !!} @else - @endif </td>
			<td> 
				@include('konten.backend.users.action')
			 </td>
		</tr>
		<?php $no++; ?>
@endforeach

	</tbody>
</table>

{!! $users->render() !!}
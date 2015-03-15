<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width='5%'>No</th>
			<th>PIN</th>
			<th  width='16%'>Tgl Generate</th>
			<th width='16%'>Status</th>
			<th  width='15%'>Tgl Pemakaian</th>
			<th width='5%'>Action</th>
		</tr>
	</thead>
	<tbody>
<?php $no=$pin->firstItem(); ?>
@foreach($pin as $list)
		<tr>
			<td>{!! $no !!}</td>
			<td> {!! $list->pin !!} </td>
			<td> {!! Fungsi::date_to_tgl( date('Y-m-d', strtotime($list->created_at)) ) !!} </td>
			<td> 
				@if($list->status == 1) 
					<span class='text-danger'>sudah terpakai</span>
				@else
					<span class='text-success'>belum terpakai</span>
				@endif
			 </td>
			<td> 
				@if($list->tgl_pakai == null)
					-
				@else
					{!! Fungsi::date_to_tgl( date("Y-m-d", strtotime($list->tgl_pakai)) ) !!}
				@endif 
			</td>
			<td>-</td>
		</tr>
<?php $no++; ?>
@endforeach
	</tbody>
</table>


{!! $pin->render() !!}
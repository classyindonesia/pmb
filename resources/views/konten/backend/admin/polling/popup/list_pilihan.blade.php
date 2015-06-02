<script type="text/javascript">
	$(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>

@include($base_view.'popup.komponen.tombol_add_pilihan')




<h1>Daftar Pilihan Jawaban Pertanyaan</h1>
<hr>
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="50px">No.</th>
			<th>Pilihan</th>
			<th width="100px" class="text-center"> Action</th>
		</tr>
	</thead>
	<tbody>
	<?php $no=1; ?>
@foreach($pilihan as $list)
		<tr>
			<td class="text-center">{!! $no !!}</td>
			<td>{!! $list->pilihan !!}</td>
			<td>
				{!! Action::edit(false, route("admin_polling.edit_pilihan", [Request::segment(4), $list->id]), $list->id) !!}
				
				||



				<i class='fa fa-times' style='cursor:pointer;' id='del{{ $list->id }}'></i>
				<script type="text/javascript">
				$('#del{{ $list->id }}').click(function(){
					setuju = confirm('are you sure?');
					if(setuju == true){
						$.ajax({
							url : '{{ route("admin_polling.del_pilihan") }}',
							data : {id : '{{ $list->id }}', _token : '{!! csrf_token() !!}' },
							type : 'post',
							error: function(err){
								alert('error! terjadi sesuatu pada sisi server!');
							},
							success:function(ok){
								$('.modal-body').load('{!! route("admin_polling.pilihan", Request::segment(4)) !!}')								
							}
						})
					}
				})
				</script>
				


			</td>
		</tr>
		<?php $no++; ?>
@endforeach
	</tbody>
</table>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight:bold;">Statistik Peserta Pendaftaran</h3>
  </div>
  <div class="panel-body" style="padding-left: 0px;">

<table class="table">
<?php $total_pendaftar = 0; ?>
@foreach($gelombang as $list)
	<tr>
		<td>
			Jumlah Pendaftar, {!! $list->nama !!}
		</td>
		<td>
			 {!! count($list->mst_pendaftaran) !!}
		</td>
		<td>
			@include($base_view.'operator.action.view_detail')
		</td>
	</tr>
	<?php $total_pendaftar = $total_pendaftar+count($list->mst_pendaftaran); ?>
@endforeach

	

	<tr>
		<td>
			Jumlah Pendaftar, di tahun ajaran sekarang
		</td>
		<td>
			 {!! $total_pendaftar !!}
		</td>
		<td>
			 
		</td>
	</tr>


</table>





  </div>
</div>
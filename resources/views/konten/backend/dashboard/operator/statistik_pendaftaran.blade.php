<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title" style="font-weight:bold;">Statistik Peserta Pendaftaran</h3>
  </div>
  <div class="panel-body" style="padding-left: 0px;">

<table class="table">
@foreach($gelombang as $list)
	<tr>
		<td>
			Jumlah Pendaftar, {!! $list->nama !!}
		</td>
		<td>
			 {!! count($list->mst_pendaftaran) !!}
		</td>
	</tr>
@endforeach

	
</table>





  </div>
</div>
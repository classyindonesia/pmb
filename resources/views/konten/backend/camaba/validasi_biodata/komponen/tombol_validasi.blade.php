@if($biodata->mst_biodata->status == 0)
	<button class="btn btn-success   btn-lg pull-right" id="validasi" style="margin-right:1em;"> 
		<i class='fa fa-check-circle-o'></i> validasi
	</button>

@else
	<button class="btn btn-success   btn-lg pull-right" id="validasi" style="margin-right:1em;"> 
		<i class='fa fa-file-pdf-o'></i> Cetak
	</button>
@endif
@if(count($biodata)>0)
	@if(count($biodata->mst_biodata)>0)
		@if($biodata->mst_biodata->status == 0 )	
			<button class="btn btn-info   btn-lg pull-right" id="simpan"> 
				<i class='fa fa-floppy-o'></i> simpan
			</button>
		@endif
	@endif
@endif
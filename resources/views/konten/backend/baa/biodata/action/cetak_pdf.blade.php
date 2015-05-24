@if(count($list->mst_biodata)>0)
	@if($list->mst_biodata->status == 1)

		| <i 
			class='fa fa-file-pdf-o pointer'
			data-toggle='tooltip'
			title='cetak lembar validasi biodata'
			id='cetak_pdf{!! $list->mst_biodata->id !!}'
			></i>

		<script type="text/javascript">
		$('#cetak_pdf{!! $list->mst_biodata->id !!}').click(function(){
			window.open('{!! route("backend_biodata.cetak_pdf", $list->mst_biodata->id) !!}', '__blank');
		});
		</script>

	@endif
@endif
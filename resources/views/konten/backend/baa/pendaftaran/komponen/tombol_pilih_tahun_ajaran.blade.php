@if(Auth::user()->ref_user_level_id == 6)
	
	<button style="margin-right:2em;" class="btn btn-primary pull-right" id="pilih_thn_ajaran"> 
		<i class='fa fa-th-list'></i> pilih thn ajaran
	</button>

	<script type="text/javascript">
 function show_modal(){
	$('#myModal').modal('show');
	$('.modal-body').load("{!! route('baa_data_pendaftaran.pilih_tahun_ajaran') !!}");
 }

$('#pilih_thn_ajaran').click(function(){
	show_modal();
});


@if(!Session::has('ref_thn_ajaran_id'))
	show_modal();
@endif


	</script>

@endif



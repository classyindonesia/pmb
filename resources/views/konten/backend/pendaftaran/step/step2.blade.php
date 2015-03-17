<h3>Pilih Prodi pilihan pertama</h3>
<hr>
@foreach($prodi as $list)

	<button id='pilih_prodi1_{!! $list->id !!}' class='alert alert-info'> {!! $list->nama !!} </button>

<script type="text/javascript">
$('#pilih_prodi1_{!! $list->id !!}').click(function(){
	$('#tahap3').removeClass('btn-default');
	$('#tahap3').addClass('btn-primary');


$('#ref_prodi_id1').val('{!! $list->id !!}');

nama = '{!! $list->nama !!}';
$('#selected_prodi1').html('<div class="alert-info"> <i class="fa fa-circle"></i> Prodi 1 : '+nama+'</div>')

$('#pilih_prodi1_{!! $list->id !!}').effect( "transfer", { to: $( "#selected_prodi1" ) }, 500, function(){
		$('#step2').hide();
		$('#step3').fadeIn();
	});

});

</script>



@endforeach
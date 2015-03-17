<h3>Pilih Prodi pilihan kedua</h3>
<hr>

	<button id='pilih_prodi2_0' class='alert alert-success'> -Tidak Memilih- </button>

@foreach($prodi as $list)

	<button id='pilih_prodi2_{!! $list->id !!}' class='alert alert-success'> {!! $list->nama !!} </button>

 
<script type="text/javascript">

 
$('#pilih_prodi2_{!! $list->id !!}').click(function(){
	$('#tahap4').removeClass('btn-default');
	$('#tahap4').addClass('btn-primary');


$('#ref_prodi_id2').val('{!! $list->id !!}');

nama = '{!! $list->nama !!}';
$('#selected_prodi2').html('<div class="alert-info"> <i class="fa fa-circle"></i> Prodi 2 : '+nama+'</div>')

$('#pilih_prodi2_{!! $list->id !!}').effect( "transfer", { to: $( "#selected_prodi2" ) }, 500, function(){
		$('#step3').hide();
		$('#step4').fadeIn();
	});

});

</script>
@endforeach


<script type="text/javascript">



$('#pilih_prodi2_0').click(function(){
	$('#tahap4').removeClass('btn-default');
	$('#tahap4').addClass('btn-primary');


$('#ref_prodi_id2').val(0);

nama = '-kosong-';
$('#selected_prodi2').html('<div class="alert-info"> <i class="fa fa-circle"></i> Prodi 2 : '+nama+'</div>')

$('#pilih_prodi2_0').effect( "transfer", { to: $( "#selected_prodi2" ) }, 500, function(){
		$('#step3').hide();
		$('#step4').fadeIn();
	});

});


</script>
<h3>Pilih Gelombang</h3>
<hr>
@foreach($gelombang as $list)
	<button id='gelombang{!! $list->id !!}' class='alert alert-warning'>{!! $list->nama !!}</button>
<script type="text/javascript">
$('#gelombang{!! $list->id !!}').click(function(){


	$('#tahap5').removeClass('btn-default');
	$('#tahap5').addClass('btn-primary');


	$('#ref_gelombang_id').val('{!! $list->id !!}');

	nama = '{!! $list->nama !!}';
	$('#selected_gelombang').html('<div class="alert-info"> <i class="fa fa-circle"></i> Gelombang : '+nama+'</div>')

	$('#gelombang{!! $list->id !!}').effect( "transfer", { to: $( "#selected_gelombang" ) }, 500, function(){
			$('#step4').hide();
			$('#step5').fadeIn();
	});

 

})
</script>

@endforeach
<hr>
<button class='btn btn-info form-control' id='mulai' style='font-size:50px;font-weight:bold;height:100px;'> <i class="fa fa-magic"></i> Mulai Pendaftaran</button>

<script type="text/javascript">
$('#mulai').click(function(){
	$('#step1').hide();
	$('#step2').fadeIn();
	$('#tahap2').addClass('btn-primary');
	$('#tahap2').removeClass('btn-default');


});
 
</script>
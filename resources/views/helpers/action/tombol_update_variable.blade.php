<button id='simpan{!! $init_id !!}' class='btn btn-primary'> 
	<i class='fa fa-floppy-o'></i> simpan 
</button>

<script type="text/javascript">
$('#simpan{!! $init_id !!}').click(function(){

	variable = '{!! $variable !!}';
	value = $('#value_{!! $variable !!}').val();
	if(value == ''){

		return false;
	}

$.ajax({
	url : '{!! route("admin_config.update") !!}',
	data : {variable : variable, value : value},
	type : 'post',
	error: function (err){
		alert('error! terjadi kesalahan pada sisi server!');
	},
	success:function(ok){
		window.location.reload();
	}
})

})
</script>
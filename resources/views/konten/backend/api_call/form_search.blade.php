 <table width='80%' class='pull-right' style='margin-bottom:1em;'>
	<tr>
		<td>

 <div class="input-group">
			<input autofocus type='text' value='{!! Session::get("pencarian_api") !!}' name='pencarian_api' id='pencarian_api' placeholder='pencarian api...' class='form-control' />
      <span class="input-group-btn">
        <button id='go' class="btn btn-default" type="button"> <i class='fa fa-search'></i> search</button>
			@if(Session::has("pencarian_api"))
			<button class='btn btn-danger' id='reset'> <i class='fa fa-times'></i> </button>
			@endif
      </span>
    </div><!-- /input-group -->



		</td>
 
	</tr>
</table>


<script type="text/javascript">

function do_pencarian(){
	pencarian_api = $('#pencarian_api').val();
	if(pencarian_api == ''){
		return false;
	}
	    	$.ajax({
	    		url : '{!! route("admin_api_call.submit_search") !!}',
	    		data : {submit : 1, pencarian_api : pencarian_api},
	    		type : 'post',
	    		error:function(err){
	    			alert('error! terjadi kesalahan pada sisi server!');
	    		},
	    		success:function(ok){
	    			window.location.reload();
	    		}
	    	})	
}


$("#pencarian_api").keypress(function(e) {
    if(e.which == 13) {
    	do_pencarian();
    }
});

$('#go').click(function(){
	do_pencarian();
})



$('#reset').click(function(){
    	$.ajax({
    		url : '{!! route("admin_api_call.submit_search") !!}',
    		data : {reset : 1},
    		type : 'post',
    		error:function(err){
    			alert('error! terjadi kesalahan pada sisi server!');
    		},
    		success:function(ok){
    			window.location.reload();
    		}
    	})	
})

</script>
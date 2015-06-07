<label>


<input 
	type="radio" 
	name="pilihan{!! $list->id !!}" 
	id="pilihan_{!! $list2->id !!}" 
	value="{!! $list2->id !!}" 

@if(count($list2->mst_jawaban_polling->first() )>0)
	checked
@endif
	>
	{!! $list2->pilihan !!}
</label>



<script>
$('#pilihan_{!! $list2->id !!}').click(function(){


	form_data = {
		mst_pertanyaan_polling_id : {!! $list->id !!},
		mst_pilihan_polling_id : {!! $list2->id !!},
		mst_user_id				: {!! Auth::user()->id !!}
	}
	$.ajax({
		url : '{!! route("camaba_polling.submit_jawaban") !!}',
		type : 'post',
		data :form_data,
		error:function(err){
			alert('error! terjadi kesalahan pada sisi server!');
		},
		success:function(ok){
			//window.location.reload();
		}
	})
});
</script>
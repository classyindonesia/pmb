<div class="media">
 
	@foreach($polling as $list)
		
<div class="col-md-5">
	  <div class="media-body">
	    <h4 class="media-heading">{!! $list->pertanyaan !!}</h4>
	   	<hr>
	   	@if(count($list->mst_pilihan_polling)>0)
	   		@foreach($list->mst_pilihan_polling as $list2)
		   		<ul class="list-unstyled">
		   			<li>
	 					@include($base_view.'pilihan_jawaban')	   				
		   			</li>
		   		</ul>
	   		@endforeach
	   	@endif
	  </div>	
</div>

	@endforeach

</div>
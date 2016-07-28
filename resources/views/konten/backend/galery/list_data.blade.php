<div class="row">

	@foreach($album as $list)

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">

			@if(count($list->mst_galery)<=0)
				<img data-src="holder.js/300x200?text=album \n masih kosong" class="img-responsive" alt="Image" >
			@else
				<img data-src="holder.js/300x200?text=album \n masih kosong" class="img-responsive" alt="Image" >
			@endif

	      <div class="caption">
	        <h3>{!! str_limit($list->nama, 30) !!}</h3>
	        <p>	        	 
	        	 @include($base_view.'action.edit')
	        	 @include($base_view.'action.delete')
	        </p>
	      </div>
	    </div>
	  </div>

 

	@endforeach


</div>







{!! $album->appends(Request::get('search'))->render() !!}
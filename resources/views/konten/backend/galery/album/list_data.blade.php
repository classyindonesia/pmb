<div class="row">

	@foreach($album as $list)

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
			<h3 class="text-center">{!! str_limit($list->nama, 30) !!}</h3>

			@include($base_view.'album.thumbnail')

	      <div class="caption">
	        <hr>
	        @include($base_view.'album.action')
	      </div>
	    </div>
	  </div>

 

	@endforeach


</div>







{!! $album->appends(Request::get('search'))->render() !!}
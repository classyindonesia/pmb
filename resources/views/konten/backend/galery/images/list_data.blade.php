<div class="row">

	@foreach($album->mst_galery()->orderBy('id', 'DESC')->paginate(9) as $list)

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
			@include($base_view.'images.thumbnail')
	    </div>
	  </div>

 

	@endforeach


</div>







{!! $album->mst_galery()->paginate(9)->appends(Request::get('search'))->render() !!}
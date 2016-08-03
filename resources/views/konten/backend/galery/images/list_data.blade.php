<div class="row">

	@foreach($album->mst_galery()->orderBy('id', 'DESC')->paginate(10) as $list)

	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
			@include($base_view.'images.thumbnail')
	    </div>
	  </div>

 

	@endforeach


</div>







{!! $album->mst_galery()->paginate(10)->appends(Request::get('search'))->render() !!}
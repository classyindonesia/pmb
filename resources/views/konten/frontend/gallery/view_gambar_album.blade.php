<div style="height: 250px;overflow: hidden;" class="thumbnail">
	@php($foto = $list->mst_galery()->orderBy('id', 'DESC')->first())
	@if(count($foto)>0)
	    <img src="/upload/galery/thumbnail_{!! $foto->nama_file !!}" class="img-responsive">
	@else 
	    <img class="img-responsive" src="holder.js/300x254?text= {!! $list->nama !!}">
	@endif  
</div>
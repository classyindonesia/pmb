<div class="col-md-4 pull-right">
	{!! Form::open(array('route' => 'backend.validasi_biodata_bml.index', 'method' => 'get')) !!}
	   <div class="input-group">
 	 			{!! Form::text('search', Request::get('search'), ['class' => 'form-control', 'autofocus', 'placeholder' => 'search by npm or name...']) !!}
	      <div class="input-group-addon ">
	      	 <i class='fa fa-search'></i>
	      </div>
	    </div>
	{!! Form::close() !!}	
</div>
 
 <hr class="hidden-md hidden-lg col-xs-12 col-md-12">
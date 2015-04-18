 	{!! Form::open(array('route' => 'daftar_file.index', 'method' => 'get')) !!}
	   <div class="input-group">
 	 			{!! Form::text('search', Request::get('search'), ['class' => 'form-control', 'autofocus', 'placeholder' => 'search by name...']) !!}
	      <div class="input-group-addon ">
	      	 <i class='fa fa-search'></i>
	      </div>
	    </div>
	{!! Form::close() !!}	
 
 
 <hr style="margin:2px;">
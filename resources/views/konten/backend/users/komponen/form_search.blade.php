<div class="col-md-4 pull-right">
	{!! Form::open(array('route' => 'admin_users.index', 'method' => 'get')) !!}
	   <div class="input-group">
 	 			{!! Form::text('search', Request::get('search'), ['class' => 'form-control', 'autofocus', 'placeholder' => 'search by no pendaftaran or name...']) !!}
	      <div class="input-group-addon ">
	      	 <i class='fa fa-search'></i>
	      </div>
	       {!! Form::select('level', ['' => 'all', '1' => 'admin', '4' => 'camaba', ''], Request::get('level'), ['class' => 'form-control']) !!}
	    </div>

	{!! Form::close() !!}	
</div>
 
<hr style="margin-bottom:2px;margin-top:2px;" class="col-xs-12 col-md-12">
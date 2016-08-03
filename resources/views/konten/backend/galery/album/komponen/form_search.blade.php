<div class="row">
	<div class="col-md-7 col-lg-offset-5">
		{!! Form::open(['method' => 'get', 'route' => 'backend.galery.index']) !!}

		<div 
			@if(Request::get('search'))
				class="col-md-8" 
			@else 
				class="col-md-10" 
			@endif
		>
			<div class="form-group ">
				{!! Form::text('search', Request::get('search'), ['placeholder' => 'search by nama album...', 'class' => 'form-control']) !!}			
			</div>		
		</div>

		<div

			@if(Request::get('search'))
				class="col-md-4" 
			@else 
				class="col-md-2" 
			@endif

		>
			<button class="btn btn-info pull-right" type="submit" >
				<i class='fa fa-search'></i> search
			</button>	

			@if(Request::get('search'))
				<a href="{!! route('backend.galery.index') !!}" class="btn btn-danger">reset</a>
			@endif
		</div>

		{!! Form::close() !!}

		
	</div>
</div>

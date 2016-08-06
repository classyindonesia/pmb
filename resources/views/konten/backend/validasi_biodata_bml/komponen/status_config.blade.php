@php($config = App\Helpers\SetupVariable::get('generate_npm_validasi'))

@if($config == 1)
	<div class="col-md-3 alert alert-success">
		status config : enabled
	</div>
@else
	<div class="col-md-3 alert alert-danger">
		status config : disabled
	</div>
@endif
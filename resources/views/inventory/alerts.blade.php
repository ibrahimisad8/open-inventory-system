@if ( session()->has('status') )
<div class="alert alert-icon alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert"></button>
	<i class="fe fe-check mr-2" aria-hidden="true"></i> {{ session('status') }}
</div>
@endif

@if ( session()->has('info') )
<div class="alert alert-icon alert-primary alert-dismissible">
	<button type="button" class="close" data-dismiss="alert"></button>
	<i class="fe fe-bell mr-2" aria-hidden="true"></i> {{ session('info') }}
</div>
@endif

@if ( $errors->any() )
<div class="alert alert-icon alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert"></button>
	<i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i>
	@foreach ($errors->all() as $error)
	<div>{{ $error }}</div>
	@endforeach
</div>
@endif

@if ( session()->has('error') )
<div class="alert alert-icon alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert"></button>
	<i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> {{ session('error') }}
</div>
@endif
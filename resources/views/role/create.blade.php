@extends('layouts.app')

@section('content')
<h3>Add Role Information</h3>
<div class="row">
	<form method="POST" action="/role">
		{{ csrf_field() }}
		<div class="col-md-3 col-md-offset-4">
		<div class="form-group">
			<label>Enter Role Name</label>
			<input type="text" name="role" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success">
		</div>
	</div>
	</form>
</div>
@endsection
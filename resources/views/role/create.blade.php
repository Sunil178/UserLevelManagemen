@extends('layouts.app')

@section('content')
<h3>Add Role Information</h3>
<div class="row">
	<form method="POST" action="/role">
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="role" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success">
		</div>
	</form>
</div>
@endsection
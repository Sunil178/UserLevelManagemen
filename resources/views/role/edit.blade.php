@extends('layouts.app')

@section('content')
<h3>Edit Role Information</h3>
<div class="row">
	<form method="POST" action="/role/{{$role->id}}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<div class="form-group">
			<input type="text" name="role" class="form-control" value="{{$role->role}}">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success">
		</div>
	</form>
</div>
@endsection
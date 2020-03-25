@extends('layouts.app')

@section('content')
<h3>Edit Permission Information</h3>
<div class="row">
	<form method="POST" action="/permission/{{$permission->id}}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<div class="col-md-3 col-md-offset-4">
		<div class="form-group">
			<label>Enter Module Name</label>
			<input type="text" name="module" class="form-control" value="{{$permission->module}}">
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-success">
		</div>
	</div>
	</form>
</div>
@endsection
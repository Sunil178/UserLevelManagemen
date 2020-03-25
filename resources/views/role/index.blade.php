@extends('layouts.app')

@section('content')

	<a href="/role/create/" class="btn btn-success">Add Roles</a>
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>Sr. No.</th>
				<th>Role</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($roles as $index => $role)
				<tr>
					<td>{{$index+1}}</td>
					<td>{{$role->role}}</td>
					<td><a href="/role/{{$role->id}}/edit/" class="btn btn-info">Edit</a></td>
					<td><form action="role/{{$role->id}}" method="post">
                     <input class="btn btn-danger" type="submit" value="Delete" />
                       {{ method_field('DELETE') }}
                       {{ csrf_field() }}
                    </form></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
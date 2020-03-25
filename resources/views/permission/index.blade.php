@extends('layouts.app')

@section('content')

	<a href="/permission/create/" class="btn btn-success">Add Permissions</a>
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>Sr. No.</th>
				<th>Permission</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($permissions as $index => $permission)
				<tr>
					<td>{{$index+1}}</td>
					<td>{{$permission->module}}</td>
					<td><a href="/permission/{{$permission->id}}/edit/" class="btn btn-info">Edit</a></td>
					<td><form action="permission/{{$permission->id}}" method="post">
                     <input class="btn btn-danger" type="submit" value="Delete" />
                       {{ method_field('DELETE') }}
                       {{ csrf_field() }}
                    </form></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
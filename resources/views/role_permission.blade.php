<!DOCTYPE html>
<html>
<head>
	<title>User</title>
<style type="text/css">
	td, th {
		border: 1px solid black;
		width: 2%;
	}
</style>	
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">

</head>
<body>
@extends('layouts.app')


<form>
	{{csrf_field()}}
<div class="container">
	<table class="table table-striped table-hover">
		<tr>
			<th>Sr. No.</th>
			<th>Roles</th>
			@foreach ($permissions as $column)
				<th>{{$column->module}}</th>
			@endforeach
		</tr>
		@foreach ($roles as $index => $row)
		<tr id="{{$row->id}}">
			<td>{{$index+1}}</td>
			<td>{{$row->role}}</td>
			@foreach ($permissions as $column)
				<td id="{{$column->id}}">
					<div class="row">
						<div class="col-md-6">
					<label class="checkbox-inline">
				      <input class="check" type="checkbox" value="c">Create
				    </label>
						</div>
						<div class="col-md-6">
					<label class="checkbox-inline">
				      <input class="check" type="checkbox" value="r">Read
				    </label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
					<label class="checkbox-inline">
				      <input class="check" type="checkbox" value="u">Update
				    </label>
						</div>
						<div class="col-md-6">
					<label class="checkbox-inline">
				      <input class="check" type="checkbox" value="d">Delete
				    </label>
						</div>
					</div>
				</td>
			@endforeach
		</tr>
		@endforeach
	</table>
	<input type="submit" class="btn btn-success">
</div>
</form>



<script>
	 $("input[type='checkbox']").on('click', function() {
	 module_id = $(this).parent().parent().parent().parent().attr("id")
	 role_id = $(this).parent().parent().parent().parent().parent().attr("id")
		$(this).attr('name', $(this).val()+"-"+role_id+"-"+module_id)
	})
</script>


<script type="text/javascript">
    $("form").on("submit", function(e) {
      e.preventDefault()
      $.ajax({
        url: "/role-permission-store/",
        headers: {
          'X-CSRF-TOKEN': "{{ csrf_token() }}"
        },
        method: 'POST',
        type: 'JSON',
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(obj) {
          	console.log(obj)
          	if (obj.status == "Success") {
	            swal(
	              'Success',
	              'Permission Granted successfully!',
	              'success'
	            )
        	}
        	else if (obj.status == "Fail") {
	            swal(
	              'Error',
	              'Something went wrong!',
	              'error'
	            )        		
        	}
        	else {
	            swal(
	              'Warning',
	              'Please select any one permission!',
	              'warning'
	            )        		
        	}

        },
        error: function(obj) {
          console.log(obj)
          alert("error is there")


        }
      })
    })

</script>

</body>
</html>

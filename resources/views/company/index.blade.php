@extends('layouts/app')
@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('company.create') }}" class="btn btn-success">Add Company</a>
</div>

<div class="card card-default">
    <div class="card-header text-center font-weight-bold">
        COMPANY
    </div>
    <div class="card-body">
        <table class="table table-stripped">
            <thead>
                <th>Company Registered Name:</th>
                <th>Brand Name:</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach($company as $companies)
                <tr>
                    <td>{{ $companies->company_registered_name }}</td>
                    <td>{{ $companies->brand_name }}</td>
                    <td><a href="{{ route('company.edit',$companies->id) }}" class="btn btn-info">Update</a></td>
                    <td><form action="{{ route('company.destroy',$companies->id) }}" method="post">
                     <input class="btn btn-danger" type="submit" value="Delete" />
                     {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@extends('layouts/app')
@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('company.create') }}" class="btn btn-success">Add Company</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Revenue
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Company Registered Name:</th>
                <th>Brand Name:</th>
            </thead>
            <tbody>
                @foreach($company as $companies)
                <tr>
                    <td>{{ $companies->company_registered_name }}</td>
                    <td>{{ $companies->brand_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
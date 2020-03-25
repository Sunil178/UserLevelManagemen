@extends('layouts/app')
@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('revenue.create') }}" class="btn btn-success">Add Revenue</a>
</div>

<div class="card card-default">
    <div class="card-header">
        Revenue
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Customer Name:</th>
                <th>Invoice Amount:</th>
                
            </thead>
            <tbody>
                @foreach($revenue as $revenues)
                <tr>
                    <td>{{ $revenues->company_name }}</td>
                    <td>{{ $revenues->invoice_amt }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
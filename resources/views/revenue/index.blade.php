@extends('layouts/app')
@section('content')

<div class="d-flex justify-content-end mb-2">
    <a href="{{ route('revenue.create') }}" class="btn btn-success">Add Revenue</a>
</div>

<div class="card card-default">
    <div class="card-header text-center font-weight-bold">
        REVENUE
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Customer Name:</th>
                <th>Invoice Amount:</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach($revenue as $revenues)
                <tr>
                    <td>{{ $revenues->company_name }}</td>
                    <td>{{ $revenues->invoice_amt }}</td>
                     <td><a href="{{ route('revenue.edit',$revenues->id) }}" class="btn btn-info">Update</a></td>
                    <td><form action="{{ route('revenue.destroy',$revenues->id) }}" method="post">
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
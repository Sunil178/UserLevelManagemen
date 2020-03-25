@extends('layouts/app')
@section('content')

<div class="card card-default">
    <div class="card-header label bg-success">
        Add Company
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>

        @endif

        <form action="{{ route('revenue.store') }}" enctype="multipart/form-data" class="form" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" class="">Company Registered Name:</label>
                <input type="text" name="company_registered_name" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="title" class="">Brand Name:</label>
                <input type="text" name="brand_name" id="title" class="form-control">
            </div>
        </form>
    </div>
</div>

@endsection
@extends('layouts/app')
@section('content')
<div class="card card-default">
    <div class="card-header label bg-success">
        Update Company
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

        <form action="{{ route('company.update',$company->id) }}" class="form" method="POST">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
         <div class="form-group">
                <label for="title" class="">Company Registered Name:</label>
                <input type="text" name="company_registered_name" value="{{$company->company_registered_name}}" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="title" class="">Brand Name:</label>
                <input type="text" name="brand_name" value="{{$company->brand_name}}" id="title" class="form-control">
            </div>
          <div class="form-group">
             <input type="submit" class="form-control" value="Submit">
        </div>
        </form>
    </div>
</div>
@endsection

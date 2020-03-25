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

        <form action="{{ route('revenue.store') }}" class="form" method="POST">
            {{ csrf_field() }}
		<div class="form-group">
   		    <label class="control-label" >Customer Name:</label>
            <input type="text" class="form-control" placeholder="Enter Customer Name" name="company_name">
        </div>
        <div class="form-group">
         	 <label class="control-label" >Invoice Amount:</label>
          	 <input type="text" class="form-control"  placeholder="Enter Invoice Amount" name="invoice_amt">
        </div>
        <div class="form-group">
             <input type="submit" class="form-control" value="Submit">
        </div>
      </form>
    </div>
</div>

@endsection

@extends('customers.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Customers</h3><a class="btn btn-xs btn primary" href="{{ route('customers.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>First Name: </strong>
     {{ $customer->name }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Phone: </strong>
     {{ $customer->phone }}
     </div>
    </div>
   </div>
   @endsection
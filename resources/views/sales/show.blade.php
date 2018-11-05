@extends('employees.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Sales</h3><a class="btn btn-xs btn primary" href="{{ route('sales.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Product: </strong>
     {{ $sale->product_id }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Employeed: </strong>
     {{ $sale->warehouses_id }}
     </div>
    </div>
   </div>
   @endsection
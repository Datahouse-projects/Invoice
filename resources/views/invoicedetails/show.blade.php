@extends('invoicedetails.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Invicedetails</h3><a class="btn btn-xs btn primary" href="{{ route('sales.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Product_Id: </strong>
     {{ $invoicedetail->product_id }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Quantity: </strong>
     {{ $invoicedetail->quantity }}
     </div>
    </div>
   </div>
       <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Warehouse_id: </strong>
     {{ $invoicedetail->warehouse_id }}
     </div>
    </div>
   </div>

   @endsection
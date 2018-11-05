@extends('order_details.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Orderdetails</h3><a class="btn btn-xs btn primary" href="{{ route('order_detais.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>ID: </strong>
     {{ $order_detail->id }}
     </div>
    </div>
   </div>


      </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Unit Price: </strong>
     {{ $order_detail->unit_price }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Quantity: </strong>
     {{ $order_detail->quantity }}
     </div>
    </div>
   </div>
       <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Amount: </strong>
     {{ $order_details->amount }}
     </div>
    </div>
   </div>


     <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>VAT: </strong>
     {{ $order_details->vat }}
     </div>
    </div>
   </div>


     <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Line Total: </strong>
     {{ $order_detail->line_total }}
     </div>
    </div>
   </div>

   @endsection
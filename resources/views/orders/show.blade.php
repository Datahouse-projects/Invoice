@extends('Orders.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Orders</h3><a class="btn btn-xs btn primary" href="{{ route('order
      s.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Amount: </strong>
     {{ $order->amount }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Vat: </strong>
     {{ $order->total}}
     </div>
    </div>
   </div>

         <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Paid status: </strong>
     {{ $order->paid_status }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Required Date: </strong>
     {{ $order->required_date }}
     </div>
    </div>
   </div>

      <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Balance: </strong>
     {{ $order->paid_status }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Invoice Status: </strong>
     {{ $order->invoice_status }}
     </div>
    </div>
   </div>
   
   


   @endsection
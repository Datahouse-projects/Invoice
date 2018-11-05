@extends('aymentss.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Payments</h3><a class="btn btn-xs btn primary" href="{{ route('payments.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">

div class="col-xs-12">
    <div class="form-group">
     <strong>Order: </strong>
     {{ $payment->order_id }}
     </div>
    </div>
   </div>


  <div class="col-xs-12">
    <div class="form-group">
     <strong>First Name: </strong>
     {{ $payment->date }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Phone: </strong>
     {{ $payment->amount }}
     </div>
    </div>
   </div>
   @endsection
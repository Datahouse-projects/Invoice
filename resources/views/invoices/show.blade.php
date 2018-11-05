@extends('invoices.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Invoicedetails</h3><a class="btn btn-xs btn primary" href="{{ route('invoices.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Invoice_Id: </strong>
     {{ $invoice->invoice_id }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Customer Id: </strong>
     {{ $invoice->customer_id }}
     </div>
    </div>
   </div>
       <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Invoice date: </strong>
     {{ $invoice->invoice_date }}
     </div>
    </div>
   </div>
     <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Employee Id: </strong>
     {{ $invoice->employee_id }}
     </div>
    </div>
   </div>

   @endsection
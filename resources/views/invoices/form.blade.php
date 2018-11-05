<div class="raw">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Customer_Id: </strong>
     {!! Form::text('customer_id', null, ['placeholder'=>'Customer_Id','class'=>'form-control']) !!}
     </div>
     </div>
    <div class="col-xs-12"
    <div class="form-group">

     <strong>Invoice Date: </strong>
     {!! Form::date('invoice_date', null, ['placeholder'=>'Invoice_Date','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

       <strong>Employee ID: </strong>
     {!! Form::text('employee_id', null, ['placeholder'=>'Invoice_date','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

     <a class=" btn btn-xs btn-success" href="{{ route('invoices.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

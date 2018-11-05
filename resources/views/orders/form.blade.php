
  <div class="col-xs-4">
    <div class="form-group">
    <strong>Customer name: </strong>
    {!!Form::select('customer_id',$customer,null) !!}
        
   
    <div class="form-group">
    <strong>Amount: </strong>
     {!! Form::number('amount', null, ['placeholder'=>'Amount','class'=>'form-control']) !!}
     </div>

    <div class="form-group">
     <strong>VAT: </strong>
     {!! Form::number('vat', null, ['placeholder'=>'VAT','class'=>'form-control']) !!}
     </div>

    <div class="form-group">
     <strong>Total: </strong>
     {!! Form::number('total', null, ['placeholder'=>'Total','class'=>'form-control']) !!}
     </div>
    


      
        <div class="form-group">
    <strong>customer: </strong>
     



    <div class="form-group">
     <strong>Paid Status: </strong>
     {!! Form::text('paid_status', null, ['placeholder'=>'Paid status','class'=>'form-control']) !!}
     </div>

     <strong>Paid: </strong>
     {!! Form::text('paid', null, ['placeholder'=>'Paid','class'=>'form-control']) !!}
     </div>

    <div class="form-group">
     <strong>Required Date: </strong>
     {!! Form::date('required_date', null, ['placeholder'=>'Require date','class'=>'form-control']) !!}
     </div>


    <div class="form-group">
     <strong>Balance: </strong>
     {!! Form::number('balance', null, ['placeholder'=>'balance','class'=>'form-control']) !!}
     </div>

    <div class="form-group">
     <strong>Invoice Status: </strong>
     {!! Form::text('invoice_status', null, ['placeholder'=>'invoice status','class'=>'form-control']) !!}
     </div>

     <a class=" btn btn-xs btn-success" href="{{ route('orders.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

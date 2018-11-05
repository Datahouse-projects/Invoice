<div class="raw">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Unit Price: </strong>
     {!! Form::number('unit_price', null, ['placeholder'=>'Unit Price','class'=>'form-control']) !!}
     </div>
     </div>
    <div class="col-xs-12"
    <div class="form-group">

     <strong>Product_id: </strong>
    {!!Form::select('product_id',$product,null,['class'=>'form-control']) !!}
    </div>  
     z]]v
    <strong>Customer_id: </strong>
    {!!Form::select('customer_id',$customer,null,['class'=>'form-control']) !!}
    </div>  


     <strong>Quantity: </strong>
     {!! Form::number('quantity', null, ['placeholder'=>'Quantity','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

       <strong>Amount: </strong>
     {!! Form::number('amount', null, ['placeholder'=>'Amount','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

      <strong>VAT: </strong>
     {!! Form::number('vat', null, ['placeholder'=>'VAT','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

     <strong>Line Total: </strong>
     {!! Form::number('line_total', null, ['placeholder'=>'Line Total','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

      

     <a class=" btn btn-xs btn-success" href="{{ route('order_details.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

<div class="raw">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Product Id: </strong>
     {!! Form::text('product_id', null, ['placeholder'=>'Product_Id','class'=>'form-control']) !!}
     </div>
     </div>
    <div class="col-xs-12"
    <div class="form-group">

     <strong>Quantity: </strong>
     {!! Form::text('quantity', null, ['placeholder'=>'Quantity','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

       <strong>Warehouse Id: </strong>
     {!! Form::text('warehouse_id', null, ['placeholder'=>'Quantity','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">

     <a class=" btn btn-xs btn-success" href="{{ route('invoicedetails.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

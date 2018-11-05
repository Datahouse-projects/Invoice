<div class="raw">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Product: </strong>
     {!! Form::text('quantity', null, ['placeholder'=>'Quantity','class'=>'form-control']) !!}
     </div>
     </div>
    <div class="col-xs-12"
    <div class="form-group">
     <strong>Employee: </strong>
     {!! Form::text('quantity', null, ['placeholder'=>'Employee_id','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">
     <a class=" btn btn-xs btn-success" href="{{ route('sales.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

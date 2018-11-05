<div class="raw">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Warehouse Name:: </strong>
     {!! Form::text('warehouse', null, ['placeholder'=>'Warehouse','class'=>'form-control']) !!}
     </div>
     </div>
     </div>
     <div class="col-xs-12">
     <a class=" btn btn-xs btn-success" href="{{ route('warehouses.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

<div class="raw">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>:Customer Name</strong>
     {!! Form::text('name', null, ['placeholder'=>'Customer','class'=>'form-control']) !!}
     </div>
     </div>
    <div class="col-xs-12"
    <div class="form-group">
     <strong>Phone: </strong>
     {!! Form::text('phone', null, ['placeholder'=>'Phone','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">
     <a class=" btn btn-xs btn-success" href="{{ route('employees.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

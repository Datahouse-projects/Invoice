<div class="raw">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Employee Name:: </strong>
     {!! Form::text('name', null, ['placeholder'=>'Name','class'=>'form-control']) !!}
     </div>
     </div>
    <div class="col-xs-12"
    <div class="form-group">
     <strong>SecondName: </strong>
     {!! Form::text('secondname', null, ['placeholder'=>'SecondName','class'=>'form-control']) !!}
     </div>
     </div>
     <div class="col-xs-12">
     <a class=" btn btn-xs btn-success" href="{{ route('employees.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

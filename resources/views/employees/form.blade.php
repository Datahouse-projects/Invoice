<div class="raw">
  <div class="col-xs-4">
    <div class="form-group">
     <strong>First Name:: </strong>
     {!! Form::text('fname', null, ['placeholder'=>'Name','class'=>'form-control']) !!}
     </div>
     </div>

     <div class="col-xs-4">
    <div class="form-group">
     <strong>Second Name:: </strong>
     {!! Form::text('sname', null, ['placeholder'=>'Name','class'=>'form-control']) !!}
     </div>
     </div>

     <div class="col-xs-4">
    <div class="form-group">
     <strong>Title:: </strong>
     {!! Form::text('title', null, ['placeholder'=>'Name','class'=>'form-control']) !!}
     </div>
     </div>

     <div class="col-xs-4">
    <div class="form-group">
     <strong>Contacts:: </strong>
     {!! Form::text('contacts', null, ['placeholder'=>'Name','class'=>'form-control']) !!}
     </div>
     </div>

     <div class="col-xs-12">
     <a class=" btn btn-xs btn-success" href="{{ route('employees.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

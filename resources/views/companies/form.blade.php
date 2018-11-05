<div class="raw">
  <div class="col-xs-4">
    <div class="form-group">
     <strong>Companies Name:: </strong>
     {!! Form::text('name', null, ['placeholder'=>'Companies Name','class'=>'form-control']) !!}
     </div>
     </div>

         <div class="col-xs-4">
    <div class="form-group">
     <strong>Companies Tin:: </strong>
     {!! Form::number('tin', null, ['placeholder'=>'TIN No.','class'=>'form-control']) !!}
     </div>
     </div>

     
  <div class="col-xs-4">
    <div class="form-group">
     <strong>VRN:: </strong>
     {!! Form::number('vrn', null, ['placeholder'=>'VRN','class'=>'form-control']) !!}
     </div>
     </div>

     
  <div class="col-xs-4">
    <div class="form-group">
     <strong>Reg No:: </strong>
     {!! Form::number('reg_no', null, ['placeholder'=>'reg_no','class'=>'form-control']) !!}
     </div>
     </div>

     
  <div class="col-xs-4">
    <div class="form-group">
     <strong>Address:: </strong>
     {!! Form::text('adress', null, ['placeholder'=>'Address','class'=>'form-control']) !!}
     </div>
     </div>


  <div class="col-xs-4">
    <div class="form-group">
     <strong>Email:: </strong>
     {!! Form::text('email', null, ['placeholder'=>'email','class'=>'form-control']) !!}
     </div>
     </div>

     
  <div class="col-xs-4">
    <div class="form-group">
     <strong>Phone:: </strong>
     {!! Form::number('phone', null, ['placeholder'=>'Phone no','class'=>'form-control']) !!}
     </div>
     </div>


     </div>
     <div class="col-xs-12">
     <a class=" btn btn-xs btn-success" href="{{ route('companies.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>

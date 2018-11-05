@extends('employees.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Employees</h3><a class="btn btn-xs btn primary" href="{{ route('employees.index') }}">Back</a>
</div>
    </div>
    </div>


  
   @foreach ($employees as $employee)  
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>First Name: </strong>
     {{ $employee->fname }}
     </div>
    </div>
   </div>

 

    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Second Name: </strong>
     {{ $employee->sname }}
     </div>
    </div>
   </div>

    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Title: </strong>
     {{ $employee->title }}
     </div>
    </div>
   </div>
        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Contacts: </strong>
     {{ $employee->contacts }}
     </div>
    </div>
      @endforeach
   </div>
  @endsection
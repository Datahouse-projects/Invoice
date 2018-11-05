@extends('emplpyees.master')
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
     {{ $employee->name }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Second name: </strong>
     {{ $employee->secondname }}
     </div>
    </div>
      @endforeach
   </div>

   @endsection
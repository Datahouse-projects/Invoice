@extends('employees.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Employees</h3><a class="btn btn-xs btn primary" href="{{ route('employees.index') }}">Back</a>
</div>
    </div>
    </div>


   @foreach ($warehouses as $warehouse)
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Warehouses: </strong>
     {{ $warehouse->name }}
     </div>
    </div>
   </div>
    </div>
      @endforeach
   </div>

   @endsection
@extends('employees.master')
@section('content')
 <div class="col-lg-12">
  <h3>Employees </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('employees.create') }}">CREATE NEW EMPLOYEE</a>
</div>
</div>

@if ($massage=Session::get('success'))

 <div class="alert alert-success">
   <p>{{ $massage }}</p>
</div>
@endif
<table class="table table-bordered">
	<tr>
		<th width="5px">NO</th>
		<th>Name</th>
		<th>Second Name</th>
		<th width="300px">Actions</th>
		</tr>


   @foreach ($employees as $employee)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $employee->name }}</td>
   <td>{{ $employee->secondname }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('employees.show', $employee->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['employees.destroy', $employee->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $employees->links() !!}

@endsection
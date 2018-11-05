@extends('employees.master')
@section('content')
 <div class="col-lg-12">
  <h3>Warehouses </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('warehouses.create') }}">CREATE NEW WAREHOUSES</a>
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
		<th>Warehouses</th>
		<th width="300px">Actions</th>
		</tr>


   @foreach ($warehouses as $warehouse)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $warehouse->name }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('warehouses.show', $warehouse->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('warehouses.edit', $warehouse->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['warehouses.destroy', $warehouse->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $warehouses->links() !!}

@endsection
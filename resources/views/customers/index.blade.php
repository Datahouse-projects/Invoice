@extends('customers.master')
@section('content')
 <div class="col-lg-12">
  <h3>Customers </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('customers.create') }}">CREATE NEW Customer</a>
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
		<th>Phone</th>
		<th width="300px">Actions</th>
		</tr>


   @foreach ($customers as $customer)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $customer->name }}</td>
   <td>{{ $customer->phone }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('customers.show', $customer->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['customers.destroy', $customer->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $customers->links() !!}

@endsection
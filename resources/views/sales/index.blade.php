@extends('employees.master')
@section('content')
 <div class="col-lg-12">
  <h3>Employees </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('sales.create') }}">CREATE NEW SALES</a>
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
		<th>Product</th>
		<th>Employee</th>
		<th width="300px">Actions</th>
		</tr>


   @foreach ($sales as $sale)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $sale->quantity }}</td>
   <td>{{ $sale->warehouses_id }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('sales.show', $sale->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('sales.edit', $sale->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['sale.destroy', $sale->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $sales->links() !!}

@endsection
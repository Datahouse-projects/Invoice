@extends('invoicedetails.master')
@section('content')
 <div class="col-lg-12">
  <h3>Employees </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('invoicedetails.create') }}">CREATE NEW INVOICE DETAILS</a>
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
		<th>Product ID</th>
		<th>Quantity</th>
    <th>Warehouse ID</th>
		<th width="300px">Actions</th>
		</tr>


   @foreach ($invoicedetails as $invoicedetail)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $invoicedetail->product_id }}</td>
   <td>{{ $invoicedetail->quantity }}</td>
    <td>{{ $invoicedetail->warehouses_id }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('invoicedetails.show', $invoicedetail->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('invoicedetails.edit', $invoicedetail->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['invoicedetails.destroy', $invoicedetail->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $invoicedetails->links() !!}

@endsection
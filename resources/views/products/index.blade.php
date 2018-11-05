@extends('products.master')
@section('content')
 <div class="col-lg-12">
  <h3>Products </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('products.create') }}">CREATE NEW PRODUCTS</a>
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
		<th>Quantity</th>
   <th>Unit Price</th>

		<th width="300px">Actions</th>
		</tr>


   @foreach ($products as $product)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $product->name }}</td>
   <td>{{ $product->quantity }}</td>
   <td>{{ $product->price }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['products.destroy', $product->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $products->links() !!}

@endsection
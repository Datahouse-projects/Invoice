@extends('order_details.master')
@section('content')
 <div class="col-lg-12">
  <h3>orderdetails </h3>
</div>
</div>
<div class="col-sm-4">
  <a class="btn btn-xs btn-success" href="{{ route('order_details.create') }}">CREATE NEW orderdetail</a>
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
    <th>Unit Price</th>
    <th>Quantity</th>
      <th>amount</th>
    <th>Vat</th>
      <th>Line Total</th>
    <th width="300px">Actions</th>
    </tr>


   @foreach ($order_detail as $order_details)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $order_details->unit_prce }}</td>
   <td>{{ $order_details->quantity }}</td>
     <td>{{ $order_details->amount }}</td>
   <td>{{ $order_details->vat }}</td>
    <td>{{ $order_details->line_total }}</td>
    <td width="2px">
      <a class="btn btn-xs btn-info" href="{{ route('order_details.show', $order_details->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('order_details.edit', $order_details->id) }}">Edit</a>
</td>
<td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['order_details.destroy', $order_details->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
           </td>
            
   </tr>  
   @endforeach
</table>

{!! $order_detail->links() !!}

@endsection
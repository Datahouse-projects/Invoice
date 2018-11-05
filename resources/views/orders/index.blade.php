@extends('orders.master')
@section('content')
 <div class="col-lg-12">
  <h3>Orders </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('orders.create') }}">CREATE NEW ORDERS</a>
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
		<th>Amount</th>
		<th>Vat</th>
   <th>Amount</th>
    <th>Paid Status</th>
    <th>Required Date</th>
    <th>Balance</th>
    <th>Invoice Status</th>
		<th width="300px">Actions</th>
		</tr>


   @foreach ($orders as $order)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $order->amount }}</td>
   <td>{{ $order->vat }}</td>
    <td> {{$order->total }}</td>
   <td>{{ $order->paid_status }}</td>
   <td>{{ $order->require_date }}</td>
    <td> {{$order->balance }}</td>
   <td>{{ $order->invoice_status }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('orders.show', $order->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('orders.edit', $order->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['orders.destroy', $order->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  

   <div class="row">


   @endforeach
</table>

   <div class="row">
</div>
<div class="col-md-4">
  <div>
    <select name="service_type" id="service_type" class="selectpicken" data-style="select-with-transition" title="Select Class" data-size="7"></select>



@endsection
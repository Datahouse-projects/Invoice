@extends('payments.master')
@section('content')
 <div class="col-lg-12">
  <h3>Payments </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('payments.create') }}">CREATE NEW PAYMENT</a>
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
		<th>Order Id</th>
		<th>Date</th>
   <th>Amount</th>

		<th width="300px">Actions</th>
		</tr>


   @foreach ($payments as $payment)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $payment->order_id }}</td>
  <td>{{ $payment->date }}</td>
   <td>{{ $payment->amount }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('payments.show', $payment->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('payments.edit', $payment->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['payments.destroy', $payment->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $payments->links() !!}

@endsection
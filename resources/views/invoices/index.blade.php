@extends('invoices.master')
@section('content')
 <div class="col-lg-12">
  <h3>Invoices </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('invoices.create') }}">CREATE NEW INVOICE</a>
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
		<th>Customer Id</th>
    <th>Invoice_Date</th>
    <th>Employee ID</th>

		<th width="300px">Actions</th>
		</tr>


   @foreach ($invoices as $invoice)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $invoice->customer_id }}</td>
   <td>{{ $invoice->invoice_date }}</td>
    <td>{{ $invoice->employee_id }}</td>
    <td width="2px">
    	<a class="btn btn-xs btn-info" href="{{ route('invoices.show', $invoice->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('invoices.edit', $invoice->id) }}">Edit</a>
     
       {!! Form::open(['method' => 'DELETE', 'route' =>['invoices.destroy', $invoice->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $invoices->links() !!}

@endsection
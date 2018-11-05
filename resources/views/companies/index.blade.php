@extends('companies.master')
@section('content')
 <div class="col-lg-12">
  <h3>Companies </h3>
</div>
</div>
<div class="col-sm-12">
	<a class="btn btn-xs btn-success" href="{{ route('companies.create') }}">CREATE NEW COMPANY</a>
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
    <th>TIN</th>
    <th>VRN</th>
    <th>REG NO</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
     <th>PHONE</th>
		<th width="300px">Actions</th>
		</tr>


   @foreach ($companies as $company)  
   <tr>
   <td> {{ ++$i }}</td>
   <td>{{ $company->name }}</td>
    <td>{{ $company->tin }}</td>
     <td>{{ $company->vrn }}</td>
    <td>{{ $company->reg_no }}</td>
     <td>{{ $company->adress }}</td>
    <td>{{ $company->email }}</td>
      <td>{{ $company->phone }}</td>
    <td width="2px">
    	  

   <a class="btn btn-xs btn-info" href="{{ route('companies.show', $company->id) }}">Show</a>
   
       <a class="btn btn-xs btn-primary" href="{{ route('companies.edit', $company->id) }}">Edit</a>
       <td>
       {!! Form::open(['method' => 'DELETE', 'route' =>['companies.destroy', $company->id], 'style'=>'display:'])!!} 
       {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
       {!! Form::close() !!}</a>
    		   </td>
            
    </td>


   </tr>  
   @endforeach
</table>

{!! $companies->links() !!}

@endsection
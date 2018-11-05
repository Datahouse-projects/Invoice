@extends('employees.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
     <div class="pull-left">
     <h3>Edit Employee</h3>
     </div>
     </div>
     </div>
     @if(count($errors) > 0)
      <div class="alert alert-danger">
      <strong>Whoops</strong> There is a prblem with your input
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
     </div>
     @endif

     {!! Form::model($warehouse, ['method' =>'PATCH', 'route' =>['warehouses.update', $warehouse->id]])!!}
      @include('warehouses.form')
     {!! Form::close() !!}
@endsection
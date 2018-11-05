@extends('companies.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
     <div class="pull-left">
     <h3>Update Employee</h3>
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

     {!! Form::model($companies, ['method' =>'PATCH', 'route' =>['companies.update', $companies->id]])!!}
      @include('companies.form')
     {!! Form::close() !!}
@endsection
@extends('order_details.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
     <div class="pull-left">
     <h3>Update Order Details</h3>
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

     {!! Form::model($order_details, ['method' =>'PATCH', 'route' =>['order_details.update', $order_details->id]])!!}
      @include('order_details.form')
     {!! Form::close() !!}
@endsection
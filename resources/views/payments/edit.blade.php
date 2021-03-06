@extends('payments.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
     <div class="pull-left">
     <h3>Edit Payments</h3>
     </div>
     </div>
     </div>
     @if(count($errors) > 0)
      <div class="alert alert-danger">
      <strong>Whoops</strong> There is a problem with your input
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
     </div>
     @endif

     {!! Form::model($payment, ['method' =>'PATCH', 'route' =>['payments.update', $payment->id]])!!}
      @include('payments.form')
     {!! Form::close() !!}
@endsection
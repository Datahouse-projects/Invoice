@extends('products.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Products</h3><a class="btn btn-xs btn primary" href="{{ route('products.index') }}">Back</a>
</div>
    </div>
    </div>
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>First Name: </strong>
     {{ $products->name }}
     </div>
    </div>
   </div>

        <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Phone: </strong>
     {{ $products->phone }}
     </div>
    </div>
   </div>
   @endsection
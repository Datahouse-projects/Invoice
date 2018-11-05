@extends('companies.master')
@section('content')
 <div class="row">
   <div class="col-lg-12">
    <div class="pull-left">
    	<h3>Show Companie</h3><a class="btn btn-xs btn primary" href="{{ route('companies.index') }}">Back</a>
</div>
    </div>
    </div>


   @foreach ($companies as $company)
    <div class="row">
  <div class="col-xs-12">
    <div class="form-group">
     <strong>Company name: </strong>
     {{ $company->name }}
     </div>
    </div>
   </div>

   <div class="col-xs-12">
    <div class="form-group">
     <strong>Company name: </strong>
     {{ $company->tin }}
     </div>
    </div>
   </div>

   <div class="col-xs-12">
    <div class="form-group">
     <strong>Company name: </strong>
     {{ $company->vrn }}
     </div>
    </div>
   </div>

   <div class="col-xs-12">
    <div class="form-group">
     <strong>Company name: </strong>
     {{ $company->reg_no }}
     </div>
    </div>

    <div class="col-xs-12">
    <div class="form-group">
     <strong>Company name: </strong>
     {{ $company->adress }}
     </div>
    </div>
    <div class="col-xs-12">
    <div class="form-group">
     <strong>Company name: </strong>
     {{ $company->email }}
     </div>
    </div>
    <div class="col-xs-12">
    <div class="form-group">
     <strong>Company name: </strong>
     {{ $company->phone }}
     </div>
    </div>
   </div>
    </div>
      @endforeach
   </div>

   @endsection
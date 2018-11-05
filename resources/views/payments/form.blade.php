<div class="col-sm-6">
    <div class="form-group">
    <strong>Payment: </strong>
    {!!Form::select('order_id',$order,null,['class'=>'form-control']) !!}
    </div>  
     
    <div class="form-group">
     <strong>Date:</strong>
     {!! Form::date('date', null, ['placeholder'=>'Date','class'=>'form-control']) !!}
     </div>     
      
    <div class="form-group">
     <strong>Amount:</strong>
     {!! Form::number('amount', null, ['placeholder'=>'Amount','class'=>'form-control']) !!}
     </div>
     

     <div class="form-group">
     <a class=" btn btn-xs btn-success" href="{{ route('payments.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
</div>
   


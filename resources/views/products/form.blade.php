<div class="raw">

  <div class="form-group">
    
      <label for="name" class="col-md-4 control-label"> Product name</label>
       <div class="col-xs-4">
         <input id="name" type="text" class="form-control" name="name" value=" " >
             </div>
        <br>

      <label for="name" class="col-md-4 control-label"> Quantity</label>
         <div class="col-md-4">
         <input id="quantity" type="text" class="form-control" name="quantity" value=" " >
             </div>
             </div>
<br>

  <div class="form-group">
    
      <label for="name" class="col-md-4 control-label"> Price</label>
       <div class="col-xs-4">
         <input id="price" type="text" class="form-control" name="price" value=" " >
             </div>
        <br>

<br><br><br><br>

     <div class="col-xs-4">
     <a class=" btn btn-xs btn-success" href="{{ route('products.index') }}">Back</a>
     <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
     </div>
     </div>


<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Payment;
use App\Customer;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {

        $orders=Order::latest()->paginate(5);

        return view('orders.index', compact('orders'))->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $customer= Customer::latest()->paginate(5);
          $customer=[];
        $customers=Customer::all();
        foreach($customers as $customer){
            $customer[$customer->id]=$customer->name;        
    
}
  {      
        return view('orders.create',compact('customers'));
    }

    }/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         request()->validate([
         'customer_id' => 'required',
         'amount' => 'required',
         'vat' =>  'required',
         'total' => 'required',
         'paid_status' =>  'required',
         'required_date'=>'required',
         'amount' => 'required',
         'vat' =>  'required',
         'total' => 'required',
         'paid_status'=>'required',
         'paid'=>'required',
         'balance'=>'required',
         'invoice_status'=>'required',
         ]);

     Order::create($request->all());
     return redirect()->route('orders.index')->with('success','Orders created successfully');
    }
/**     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Order = Order::find($id);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $order = Order::find($id);
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
        'amount'=>'required',
         'vat'=>'required',
         'total'=>'required',
         'paid_status'=>'required',
         'required_date'=>'required',
         'amount'=>'required',
         'total'=>'required',
         'paid_status'=>'required',
         'paid'=>'required',
         'balance'=>'required',
         'invoice_status'=>'required',
        ]);
     Order::find($id)->update($request->all());
     return redirect()->route('orders.index')->with('success','Orders Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Order::find($id)->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully');   
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Order;
class PaymentsController extends Controller
{ 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
    
        $payments= Payment::latest()->paginate(5);
    
        return view('payments.index', compact('payments'))->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $order=[];
        $orders=Order::all();
        foreach($orders as $deo){
            $order[$deo->id]=$deo->order_id;

    }
    {
      return view('payments.create',compact('order'));
    }
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         request()->validate([
         'order_id' => 'required',
         'date' =>  'required',
         'amount' => 'required',
         ]);
     Payment::create($request->all());
     return redirect()->route('payments.index')->with('success','Paid successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Payment = Payment::find($id);
        return view('payments.show', compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $payment = Payment::find($id);
        return view('payments.edit', compact('payment'));
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
        'order_id' => '',
        'date' => 'required',
        'amount' =>  'required',
        ]);
     Payment::find($id)->update($request->all());
     return redirect()->route('payments.index')->with('success','Payments Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Payment::find($id)->delete();
        return redirect()->route('payments.index')->with('success', 'Payment deleted successfully');   
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order_detailsController extends Controller
{
  public function index()
    {
    
        $order_detail= Order_detail::latest()->paginate(5);
        return view('order_details.index', compact('order_detail'))->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('order_details.create');
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
         'unit_price' => 'required',
         'quantity' =>  'required',
         'amount' => 'required',
         'vat' =>  'required',
         'line_total' => 'required',
         ]);
     Order_detail::create($request->all());
     return redirect()->route('order_details.index')->with('success','Order_details created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Order_detail = Order_detail::find($id);
        return view('order_details.show', compact('order_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $order_detail = Order_detail::find($id);
        return view('order_details.edit', compact('order_detail'));
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
        'unit_price' => 'required',
        'quantity' =>  'required',
        'amount' => 'required',
        'vat' =>  'required',
        'line_total' => 'required',
        ]);
     Order_detail::find($id)->update($request->all());
     return redirect()->route('order_details.index')->with('success','Order_detail Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Order_detail::find($id)->delete();
        return redirect()->route('order_details.index')->with('success', 'Order details deleted successfully');   
    }
}

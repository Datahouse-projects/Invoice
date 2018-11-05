<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoicedetail;
class InvoicedetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoicedetails= Invoicedetail::latest()->paginate(5);
        return view('invoicedetails.index',compact('invoicedetails'))->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('invoicedetails.create');
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
         'product_id' => 'required',
         'quantity' => 'required',   
         'warehouse_id' => 'required',          
            ]);
        Invoicedetail::create($request->all());
        return redirect()->route('invoicedetails.index')->with('success','Invoicedetails created successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoicedetails = Invoicedetail::find($id);
        return view('invoicedetails.show', compact('invoicedetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $invoicedetails = Invoicedetail::find($id);
      return view('invoicedetails.edit', compact('invoicedetail'));

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
         'product_id' => 'required',
         'quantity' => 'required',   
         'warehouse_id' => 'required',
            ]);
            Invoicedetail::find($id)->updated($request->all());
            return redirect()->route('invoicedetails.index')->with('success','Invoicedetail Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Invoicedetail::nd($id)->delete();
        return redirect()->route('invoicedetails.index')->with('success', 'invoicedetail deleted successfully');
}
}
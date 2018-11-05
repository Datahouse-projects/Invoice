<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
class InvoicessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
    
        $invoices= Invoice::latest()->paginate(5);
        return view('invoices.index', compact('invoices'))->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('invoices.create');
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
         'customer_id' => 'required',
         'invoice_date' =>  'required',
          'employee_id' => 'required',
        ]);
     Invoice::create($request->all());
     return redirect()->route('invoices.index')->with('success','Invoices created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $invoices = Invoice::find($id);
        return view('invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $invoices = Invoice::find($id);
        return view('invoices.edit', compact('invoice'));
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
         'customer_id' => 'required',
         'invoice_date' =>  'required',
          'employee_id' => 'required',
        ]);
     Invoice::find($id)->update($request->all());
     return redirect()->route('invoices.index')->with('success','Invoices Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Invoice::find($id)->delete();
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully');   
    }
}

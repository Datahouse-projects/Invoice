<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouse;
class WarehousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        $warehouses= Warehouse::latest()->paginate(5);
        return view('warehouses.index',compact('warehouses'))->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('warehouses.create');
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
         'name' => 'required',            
            ]);
        Warehouse::create($request->all());
        return redirect()->route('warehouses.index')->with('success','Warehouse created successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Warehouse = Sale::find($id);
        return view('warehouses.show', compact('Warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sale = Sale::find($id);
      return view('warehouses.edit', compact('Warehouse'));

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
         'warehouses' => 'required',
         
            ]);
            Warehouse::find($id)->updated($request->all());
            return redirect()->route('warehouse.index')->with('success','Warehouse Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sale::find($id)->delete();
        return redirect()->route('Warehouse.index')->with('success', 'Warehouse deleted successfully');
}
}
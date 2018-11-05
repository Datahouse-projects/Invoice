<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $companies= Company::latest()->paginate(5);
        return view('companies.index', compact('companies'))->with('i',(request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
         request()->validate
         'name' => 'required',
         'tin' =>  'required',
          'vrn' =>  '',
         'reg_no' => 'required',
         'adress' =>  'required',
          'email' => 'required',
         'phone' =>  'required',
         ]);
     Company::create($request->all());
     return redirect()->route('companies.index')->with('success','Company created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $company = Company::find($id);
        return view('companiess.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $company = Company::find($id);
        return view('companies.edit', compact('company'));
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
       'name' => 'required',
       'tin' =>  'required',
       'vrn' =>  '',
       'reg_no' => 'required',
       'adress' =>  'required',
       'email' => 'required',
       'phone' =>  'required',
    
        ]);
     Customer::find($id)->update($request->all());
     return redirect()->route('companies.index')->with('success','Company Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Customer::find($id)->delete();
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully');   
    }
}

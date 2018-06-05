<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use App\Company;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies =  company::all();
        return view ('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('company.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Company::create($request->all());
        $this->validate($request, [

            'name' => 'required',

            'description' => 'required',

        ]);
        Company::create($request->all());

        return redirect()->route('company.index')
            ->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company= Company::find($id);

        return view('company.update',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $company = company::find($id);
        return view("company.update", compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $company = Company::find($id);
        $company->update($request->all());
        return view("company.update", compact('company'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $company = Company::findOrFail($id);
//        $company->delete();
//
//        $companies =  Company::all();
//        return view ('company.index', compact('companies'));
        Company::find($id)->delete();

//        return redirect()->route('company.index')->withMessage('success','Company deleted successfully');
        return redirect()->back()->with('success', true);
    }
}

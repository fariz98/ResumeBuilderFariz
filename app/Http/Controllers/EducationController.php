<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education= auth()->user()->education;
        return view('education.index',compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //method validation form
         $this->validate($request,[
            'school_name'=>'required',
            'school_location'=>'required',
            'degree'=>'required',
            'field_of_study'=>'required',
            'graduation_start_date'=>'required',
            'graduation_end_date'=>'required',
            'summary'=>'required',
        ]);
        
        auth()->user()->education()->create($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
       return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        //method validation form
        $this->validate($request,[
            'school_name'=>'required',
            'school_location'=>'required',
            'degree'=>'required',
            'field_of_study'=>'required',
            'graduation_start_date'=>'required',
            'graduation_end_date'=>'required',
            'summary'=>'required',
        ]);
        
        $education->update($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return back();
    }
    

    
}

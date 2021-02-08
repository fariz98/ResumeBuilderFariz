<?php

namespace App\Http\Controllers;

use App\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $detail = auth()->user()->detail;
        return view('user_detail.index', compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_detail.create');
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
            'fullname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'summarry'=>'required',
        ]);
        
        //insert query data to table in database
        $detail = new UserDetail();

        $detail->fullname = $request ->input('fullname');
        $detail->email = $request ->input('email');
        $detail->phone = $request ->input('phone');
        $detail->address = $request ->input('address');
        $detail->summarry = $request ->input('summarry');
        
        if ($request->hasfile('image')){
            $file= $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('uploads/userpic/', $filename);
            $detail->image= $filename;
        }
        else{
            return $request;
            $detail->image = '';
        }
       
        $detail->user_id = auth()->id();
        $detail->save();
        return redirect()->route('education.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDetail $userDetail)
    {
        return view('user_detail.edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserDetail $userDetail)
    {

        $detail = new UserDetail();

        $detail->fullname = $request ->input('fullname');
        $detail->email = $request ->input('email');
        $detail->phone = $request ->input('phone');
        $detail->address = $request ->input('address');
        $detail->summarry = $request ->input('summarry');
        
                $userDetail->update($request->except('_token'));    
                return redirect()->route('user_detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserDetail  $userDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDetail $userDetail)
    {
        $userDetail->delete();
        return back();
    }
  
}

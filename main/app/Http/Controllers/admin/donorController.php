<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use Illuminate\Http\Request;

class donorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adddonor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'age' => 'required',
            'gender' => 'required',
            'bloodgroup' => 'required',
            'address' => 'required',
            'message' => 'required',
            'image' => 'required'


        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images';
            $file_name = rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
        }


        $data = new Donor();
        $data->fullname = $request->fullname;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->age = $request->age;
        $data->gender = $request->gender;
        $data->blood_group = $request->bloodgroup;
        $data->address = $request->address;
        $data->message = $request->message;
        $data->image = $path . '/' . $file_name;

        $data->save();
        return back()->with('success', 'Successfully added donor,Please wait for approval');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

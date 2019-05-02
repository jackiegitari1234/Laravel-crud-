<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;  //import memmbers model

class MembersController extends Controller
{
    
    public function home()
    {
        return view('home');
    }


    // gets dada from the db
    public function index()
    {
        $allUsers = Members::all();
        return view('viewMembers', ['Users' => $allUsers]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'profession' => 'required',
            'fullname' => 'required',
            'email' => 'required',
            'phoneno' => 'required',
            'password' => 'required',
            'confirmPassword' => 'required'

        ]);
        $allUsers = new Members;
        $allUsers -> profession=$request->input('profession');
        $allUsers -> fullname=$request->input('fullname');
        $allUsers -> email=$request->input('email');
        $allUsers -> phoneno=$request->input('phoneno');
        $allUsers -> password=$request->input('password');
        $allUsers ->save();
        return redirect('/all')->with('id', $allUsers->id);

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


    public function update($id)
    {
        $allUsers = Members::find($id);
        return view('update', ['Users' => $allUsers]);
    }

    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required',
            'phoneno' => 'required'
        ]);
        $data = array (
            'fullname'=> $request->input('fullname'),
            'email'=> $request->input('email'),
            'phoneno'=> $request->input('phoneno')
        );
        Members::where('id', $id)
        ->update($data);
        return redirect('/all')->with('info', 'Update sucessfull');
    }

    public function destroy($id)
    {
        Members::where('id', $id)
        -> delete();
        return redirect('/all')->with('info', 'Deleted sucessfull');
    }
}

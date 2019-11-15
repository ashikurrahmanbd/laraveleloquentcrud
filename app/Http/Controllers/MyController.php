<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Redirect;

class MyController extends Controller
{

    //App home Controller with Data Read
    public function AppHome(){


        $student = User::all();
        return view('apphome', compact('student'));


    }

    //Add New Method for desplaying form
    public function AddNew(){
        return view('addnewuser');
    }

    //inseting data
    public function storeData(Request $request){

        //validate data
        $datavalidation = $request->validate([

            'name'      => 'required|max:100',
            'email'     => 'required',
            'phone'     => 'required'

        ]);

        
       $user = new User;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->phone = $request->phone;

       $user->save();

       return Redirect('/');

    }


    //Single Data View
    public function singleData($id){

        $student = User::findorfail($id);

        return response()->json($student);

    }

    //Delete data

    public function deleteData($id){

        $student = User::findorfail($id);

        $student->delete();

        return Redirect()->back();

    }


    //Update Data
    public function editData($id){

        $student = User::findorfail($id);

        return view('editdata', compact('student'));
        

    }

    //update Data
    public function updateData(Request $request, $id){

        $student = User::findorfail($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;

        $student->save();

        return Redirect('/');

    }


}

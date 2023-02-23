<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdatas;

class Usercontroller extends Controller
{
    function Index(){
        return view('layouts.app');
    }
    function dataInsertion(Request $request){
        $requestdata=$request->all();
        $fileName=time().$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$fileName,'public');
        $requestdata['image']='storage/'.$path;

        $data=Userdatas::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phonenumber'),
            'address'=>$request->input('address'),
            'imagepath'=>$requestdata['image']
        ]);
        $data->save();
        return redirect('/success');
    }

}

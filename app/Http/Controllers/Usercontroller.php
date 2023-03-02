<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDatas;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function Index(){
        return view('form.form');
    }
    function show(){
        $users=UserDatas::all();

        return view('form.success',['users'=>$users]);
    }
    function store(Request $request){

        $requestdata=$request->all();
        $fileName=time().$request->file('image')->getClientOriginalName();
        $filesize=$request->file('image')->getSize();
        $path=$request->file('image')->storeAs('images',$fileName,'public');
        $requestdata['image']='storage/'.$path;

        $validated=Validator::make($request->all(),[
            'first_name'=>'required|min:3|max:30',
            'last_name'=>'required|min:3|max:30',
            'email'=>'required|email',
            'phonenumber'=>'required|min:9',
            'address'=>'required',
            'image'=>'max:10240'
        ]);

        if($validated->fails()){
            return redirect('/')->withInput()->withErrors($validated);
        }
        $data=UserDatas::create([
            'name'=>$request->input('first_name')." ".$request->input('last_name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phonenumber'),
            'address'=>$request->input('address'),
            'imagepath'=>$requestdata['image']
        ]);
        $data->save();

        return redirect('/show');
    }

    public function destroy(string $id){
        $user=UserDatas::findorFail($id);
        $dbuser=DB::table('user_datas')->where('id',$id)->delete();
        return redirect('/show');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_1;

class c_1 extends Controller
{
    //b
    public function index(){
        $data=m_1::get();
        return view('view_2',compact('data'));
    }
    public function addData(){
        return view('view_1');
    }
    public function storeData(Request $req){
        $name=$req->name;
        $email=$req->email;

        $model_variable=new m_1();
        $model_variable->name=$name;
        $model_variable->email=$email;
        $model_variable->save();
        return redirect()->back()->with('success','Data Added Succesfully');
    }

    public function editData($id){
        $data=m_1::where ('id','=',$id)->first();
        return view('view_edit',compact('data'));

    }
    public function updateData(Request $req){
        $id=$req->id;
        $name=$req->name;
        $email=$req->email;
        m_1::where ('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email]);
        return redirect()->back()->with('success','Updated Succesfully');

    }

    public function deleteData($id){
        // $id=$req->id;
        // $name=$req->name;
        // $email=$req->email;
        m_1::where ('id','=',$id)->delete();
        return redirect()->back()->with('success','Deleted Succesfully');
    }
}

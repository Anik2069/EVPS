<?php

namespace App\Http\Controllers;

use App\voterinfo;
use Illuminate\Http\Request;

class VoterinfoController extends Controller
{
    //

    public function vottform()
    {
        return view('govt.voter');
    }

    public function votstore(Request $request)
    {
        $vv=new voterinfo();
        $vv->option=$request->input("option");
        $vv->nid=$request->input("nid");
        $vv->fname=$request->input("fname");
        $vv->mname=$request->input("mname");
        $vv->address=$request->input("address");

        if($request ->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'1.'.$extension;
            $file ->move('uploads/',$filename);
            $vv->image=$filename;
        }

        $vv->like=$request->input("like");

        $vv->save();

        $value=voterinfo::all();
        return view('govt.voterview',compact('value'));

    }
    public function viewmainvote(){
        $value=voterinfo::all();
        return view('govt.voterview',compact('value'));
    }
    public function viewmainvote1(){

        return redirect('/govtlog');
    }
    public function viewmainvote2(){

        return redirect('/can_login');
    }
}

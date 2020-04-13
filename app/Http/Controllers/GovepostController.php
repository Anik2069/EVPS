<?php

namespace App\Http\Controllers;

use App\govepost;
use Illuminate\Http\Request;

class GovepostController extends Controller
{
    //

    public function creatform()
    {
        return view('govt.createpost');
    }

    public function gvstore(Request $request)
    {
        $gv=new govepost();
        $gv->date=$request->input("date");
        $gv->title=$request->input("title");
        $gv->content1 =$request->input("content1");
        $gv->election=$request->input("election");

        if($request ->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'1.'.$extension;
            $file ->move('uploads/',$filename);
            $gv->image=$filename;
        }
        $gv->position=$request->input("position");
        $gv->date2=$request->input("date2");
        $gv->vdate=$request->input("vdate");
        $gv->vtime =$request->input("vtime");

        $gv->save();

        $value=govepost::all();
        return view('govt.gpostview',compact('value'));






    }

    public function viewfile(){
        $value=govepost::all();
        return view('govt.gpostview',compact('value'));
    }
}

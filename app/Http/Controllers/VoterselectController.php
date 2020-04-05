<?php

namespace App\Http\Controllers;

use App\voterselect;
use Illuminate\Http\Request;

class VoterselectController extends Controller
{
    //
    public function viewdata(Request $request)
    {
        $value = voterselect::where([
            ['creator','=',$request->session()->get('user')]
        ])->get();
        $c=0;
        return view('organizer.voter',compact('value','c'));
    }

    public function submitvoter(Request $request)
    {
        $value = new voterselect();
        $value->type = $request->input('option');
        $value->name = $request->input('like');
        $value->creator = $request->session()->get('user');
        $value->save();
        return redirect('/voterselect')->with('success','Criteria Is added Successfully');


    }

    public  function dltdata($id){

        $value= voterselect::find($id);
        $value->delete();
        return redirect('/voterselect')->with('error','Criteria Is deleted Successfully');


    }

}

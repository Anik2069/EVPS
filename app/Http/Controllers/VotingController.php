<?php

namespace App\Http\Controllers;

use App\connect;
use App\voterselect;
use App\voting;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    //
    public function viewmain($id)
    {
        return view("publicView.voter_reg", compact('id'));

    }

    public function viewmain1(Request $request)
    {
        $c = 0;
        $d = 0;
        $id = $request->input('id');
        $value = connect::find($id);

        $value1 = voterselect::where([
            ['creator', '=', $value->creator]
        ])->get();
        $valu3= voting::where([
            ['email','=',$request->input('email')],
            ['post','=',$value['post']]
        ])->get();
        $co = sizeof($valu3);
        if($co<1){
            foreach ($value1 as $val) {
                if ($val['type'] == 'email') {
                    $em = $request->input('email');
                    $data = explode('@', $em);
                    if ($data[1] == $val['name']) {
                        $d = 1;
                    }

                }

            }
            if ($d == 1) {
                $vv = new voting();
                $vv->can = $value['can'];
                $vv->post = $value['post'];
                $vv->name = $request->input('name');
                $vv->email = $request->input('email');
                $vv->address = $request->input('address');
                $vv->age = $request->input('age');
                $vv->phone = $request->input('phone');
                $vv->cname = $request->input('cname');
                $vv->save();
            }
        }

        return redirect('/')->with('success','Vote is completed');
    }

}

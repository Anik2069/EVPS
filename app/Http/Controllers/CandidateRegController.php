<?php

namespace App\Http\Controllers;

use App\candidate_reg;
use App\connect;
use App\ps;
use Illuminate\Http\Request;

class CandidateRegController extends Controller
{
    //
    public function sumitcandidata(Request $request)
    {



        if ($request->input('pass') == $request->input('pass1')) {
            $can = new candidate_reg();
            $can->email = $request->input('email');
            $can->pass = $request->input('pass');
            $can->name = $request->input('name');
            $can->age = $request->input('age');
            $can->phone = $request->input('phn');
            $can->bday = $request->input('bday');
            $can->cname = $request->input('cname');
            $can->cposition = $request->input('cp');
            $can->address = $request->input('address');
            $can->save();

            $qs = new ps();

            for ($i = 1; $i < 3; $i++) {

                $nn=$request->input("o".$i);
               // dd($nn);


                $qs->email = $request->input('email');
                $qs->post = $request->input('idd');
                $qs->answer = $nn;

            }
            $qs->save();

            $kk= new connect();
            $kk->can=$request->input('email');
            $kk->creator=$request->input('idn');
            $kk->post = $request->input('idd');

            $kk->save();

        }
        return redirect('/can_login');
    }

    public function logincan()
    {
        return view('candidate.login');
    }

}

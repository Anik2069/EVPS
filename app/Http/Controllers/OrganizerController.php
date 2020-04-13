<?php

namespace App\Http\Controllers;


use App\anserwer;
use App\candidate_reg;


use App\connect;
use App\Mail\SendMail;
use App\organizer;
use App\post;
use App\ps;
use App\question;
use App\voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Charts;

class OrganizerController extends Controller
{
    //
    public function submitdata(Request $request)
    {
        $strlen = 5;
        $str = "1234567890987654321";
        $rand = substr(str_shuffle($str), 0, $strlen);

        $org = new organizer();
        $org->name = $request->input('name');
        $org->email = $request->input('email');
        $org->password = Hash::make($request->input('password1'));
        $org->companyName = $request->input('cname');
        $org->position = $request->input('pname');
        $org->bio = $request->input('bio');
        $org->bday = $request->input('date');
        $org->v_code = $rand;
        $org->status = '0';
        $org->save();
        $message = "Hi " . $request->input('name') . ' ,';
        $message .= "\nYour Email Vertifcation Code is: " . $rand;
        $message .= "\n. Thanks for Registration !!!!!";
        Mail::to($request->input('email'))->send(new SendMail('Email Verification', $message));
        session_start();
        $_SESSION['email'] = $request->input('email');;
        return redirect('/verification');

    }

    public function verifi()
    {
        return view('organizer.verify');
    }

    public function getorg()
    {
        return view('organizer.registration');
    }

    public function submitcode(Request $request)
    {
        session_start();
        $value = organizer::where([
            ['email', '=', $_SESSION['email']]
        ])->get();
        $code = null;
        $id = 0;
        foreach ($value as $val) {
            $code = $val['v_code'];
            $id = $val['id'];
        }
        $value1 = organizer::find($id);
        $value1->status = '1';
        $value1->save();
        if ($request->input('code') == $code) {
            return redirect('/login')->with('success', 'Account is Created Successfully!!! Now, You Can Sign In');

        } else {
            return redirect('/verification')->with('error', 'Wrong Verification Code.. Try Again');
        }

    }

    public function viewlogin()
    {
        return view('organizer.login');
    }

    public function submitlogin(Request $request)
    {
        session_start();
        $email1 = $request->get('email');
        $pass = $request->get('password');
        $c = 0;
        $details = organizer::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['password'] && $value['status'] == '1') {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                /*$request->session()->put('rule', $value['userroles']);*/
                $_SESSION['ee'] = $email1;
                $_SESSION['id'] = $value['id'];

                return redirect("/dash");
                $c = 1;
            }
        }
        if ($c == 0) {

            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/login");


        }


    }

    public function viewcan(Request $request)
    {

        $user = $request->session()->get('user');

        $value = connect::where([
            ['creator', '=', $user]
        ])->get();

        $value1 = candidate_reg::all();

        return view("organizer.canview", compact('value', 'value1'));
    }

    public function resultofvote(Request $request)
    {

        $user = $request->session()->get('user');

        $value = post::where([
            ['creator', '=', $user]
        ])->get();

        $value1 = connect::where([
            ['creator', '=', $user],
            ['approved', '=', '1'],

        ])->get();
        $c = 0;
        $value2 = voting::all();

        return view("organizer.result", compact('value', 'value1', 'value2', 'c'));
    }

    public function resultofvote1(Request $request)
    {

        $user = $request->session()->get('user');

        $value = post::where([
            ['creator', '=', $user]
        ])->get();

        $value1 = connect::where([

            ['approved', '=', '1'],

        ])->get();
        $c = 0;
        $value2 = voting::all();

        return view("candidate.result", compact('value', 'value1', 'value2', 'c'));
    }

    public function resultofvote12(Request $request)
    {
        $date = date('Y-m-d');

        date_default_timezone_set('Asia/karachi');
        $time = date('h:i:s');
        $user = $request->session()->get('user');

        $value = post::where([
            ['creator', '=', $user]
        ])->get();

        $value1 = connect::where([

            ['approved', '=', '1'],

        ])->get();
        $c = 0;
        $value2 = voting::all();

        return view("publicView.votpost2", compact('value', 'value1', 'value2', 'c','date','time'));
    }
    public function viewcanpro($id, Request $request)
    {

        $val = connect::find($id);

        $user = $request->session()->get('user');

        $value = candidate_reg::where([
            ['email', '=', $val['can']]
        ])->get();
        foreach ($value as $i) {
            $name = $i['name'];
            $cname = $i['cname'];
            $cposition = $i['cposition'];
            $phone = $i['phone'];
            $bday = $i['bday'];
            $address = $i['address'];
            $email = $i['email'];


        }

        $value1 = ps::where([
            ['email', '=', $email],
            ['post', '=', $val['post']
            ]
        ])->get();

        $value2 = question::all();
        $value3 = anserwer::all();
        $to = 0;
        $tc = 0;
        $te = 0;
        $ta = 0;
        $tn = 0;
        $to1 = 0;
        $tc1 = 0;
        $te1 = 0;
        $ta1 = 0;
        $tn1 = 0;
        $i = 1;
        foreach ($value2 as $val1) {
            foreach ($value3 as $val2) {
                if ($val1['id'] == $val2['question']) {
                    foreach ($value1 as $vv) {

                        if ($vv['q1'] == $val1['id']) {
                            if ($vv['answer'] == $val2['o']) {
                                $to1 = $to1 + $vv['answer'];

                            } else if ($vv['answer'] == $val2['c']) {
                                $tc1 = $tc1 + $vv['answer'];

                            } else if ($vv['answer'] == $val2['e']) {
                                $te1 = $te1 + $vv['answer'];

                            } else if ($vv['answer'] == $val2['a']) {
                                $ta1 = $ta1 + $vv['answer'];

                            } else if ($vv['answer'] == $val2['n']) {
                                $tn1 = $tn1 + $vv['answer'];

                            }
                        }

                    }

                    $to = $to + $val2['o'];
                    $tc = $tc + $val2['c'];
                    $te = $te + $val2['e'];
                    $ta = $ta + $val2['a'];
                    $tn = $tn + $val2['n'];


                }


            }
            $i = $i + 1;
        }
        $total = $to + $tc + $te + $ta + $tn;
        $p1 = ($to1 / $total) * 100;
        $p2 = ($tc1 / $total) * 100;
        $p3 = ($te1 / $total) * 100;
        $p4 = ($ta1 / $total) * 100;
        $p5 = ($tn1 / $total) * 100;
        // dd($to, $tc, $te, $ta, $tn, $tc1, $te1, $ta1, $tn1);
        $users = [$p1, $p1, $p1];
        $pie = Charts::create('pie', 'highcharts')
            ->title('My nice chart')
            ->labels(['Openencess', 'Conscientiousness', 'Extraversion', 'Agreeableness', 'Natural Reactions'])
            ->values([$p1, $p2, $p3, $p4, $p5])
            ->dimensions(800, 300)
            ->responsive(false);
        return view("organizer.canprofile", compact('name', 'cname', 'cposition', 'phone', 'bday', 'address', 'email', 'phone', 'p1', 'p2', 'p3', 'p4', 'p5', 'pie', 'id', 'val'));
    }

}

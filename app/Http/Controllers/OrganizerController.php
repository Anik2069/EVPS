<?php

namespace App\Http\Controllers;


use App\candidate_reg;
use App\connect;
use App\Mail\SendMail;
use App\organizer;
use App\post;
use App\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
            ['creator','=',$user]
        ])->get();

        $value1 = candidate_reg::all();

return view("organizer.canview",compact('value','value1'));
    }

}

<?php

namespace App\Http\Controllers;

use App\govt;
use App\Mail\SendMail;
use App\organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GovtController extends Controller
{
    //
    public function submitlogin(Request $request)
    {
        session_start();
        $email1 = $request->get('email');
        $pass = $request->get('password');
        $c = 0;
        $details = govt::where('email', $email1)->get();

        foreach ($details as $value) {
            if ($email1 == $value['email'] && $pass == $value['password']) {
                $request->session()->put('user', $email1);
                $request->session()->put('pass', $pass);
                /*$request->session()->put('rule', $value['userroles']);*/
                $_SESSION['ee'] = $email1;
                $_SESSION['id'] = $value['id'];
                $strlen = 5;

                $str = "1234567890987654321abcdefghijklmnopqrstuvwzxyz";
                $rand = substr(str_shuffle($str), 0, $strlen);

                $gt = govt::find($value['id']);
                $gt->vcode = $rand;
                $gt->save();

                $message = "Hi " . $request->input('name') . ",";
                $message .= "\nYour login verification Code is: " . $rand;
                $message .= "\n. Thank You\n POwer BY EVPS authority.";
                Mail::to($request->input('email'))->send(new SendMail('Email Verification', $message));

                return redirect("/govtverify");
                $c = 1;
            }
        }
        if ($c == 0) {

            $request->session()->put('user', $email1);
            $request->session()->put('pass', $pass);
            $request->session()->put('id', $c);

            return redirect("/govtlog")->with('success', 'Incorrect Email and Password!!!!!');


        }


    }

    public function login_verify()
    {
        return view("govt.verify");
    }

    public function submitgovtverify(Request $request)
    {
        $in = $request->input('code');
        $value = govt::find(1);
        echo $value['vcode'] ;
        echo $in;
    if ($value['vcode'] == $in) {
            return redirect('/govthome');
        }
        else{
            return redirect('/govtverify');
        }
    }

    public function home(){
        return view('govt.index');
    }
}

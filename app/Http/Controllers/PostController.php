<?php

namespace App\Http\Controllers;

use App\anserwer;
use App\candidate_reg;
use App\connect;
use App\post;
use App\question;
use Illuminate\Http\Request;
use Image;

class PostController extends Controller
{

    //

    public function viewmain2($id)
    {
        $value = question::paginate(15);
        $value1 = anserwer::all();
        $tt = 1;
        $value33 = post::find($id);
        $name5 = $value33['creator'];
        return view('publicView.candidate_regis', compact('value', 'value1', 'tt', 'id', 'name5'));
    }


    public function viewmain()
    {
        $value = post::orderBy('id', 'desc')->paginate(10);
        $date = date('Y-m-d');



        return view('publicView.index', compact('value'));


    }

    public function viewmain3()
    {

        $date = date('Y-m-d');

        date_default_timezone_set('Asia/karachi');
        $time = date('h:i:s');


        $value = post::orderBy('id', 'desc')->paginate(10);

        return view('publicView.votpost', compact('value', 'date', 'time'));


    }

    public function viewmain1($id)
    {

        $value = post::find($id);

        $date = date('Y-m-d');

        return view('publicView.viewpost', compact('value', 'date'));
    }


    public function viewmain5($id)
    {

        $value = post::find($id);

        $date = date('Y-m-d');

        $value1 = connect::where([
            ['post', '=', $id],
            ['approved', '=', '1']
        ])->get();

        $value2 = candidate_reg::all();

        return view('publicView.viewpost1', compact('value', 'date', 'value2','value1'));
    }


    public function submitpost(Request $request)
    {


        $p = new post();
        $p->date = $request->date1;
        $p->title = $request->title;
        $p->content = $request->content1;
        $p->content1 = $request->content2;
        $p->position = $request->position;
        $p->deadline = $request->date2;
        $p->votingdate = $request->date3;
        $p->creator = $request->session()->get('user');


        /* if ($request->hasFile('image')) {
             //image upload and reizeer

             $image = $request->file('image');
             $image_name = time() . '.' . $image->getClientOriginalExtension();
             $destination = public_path('\upload');

             $resize = Image::make($image->getRealPath());
             $resize->resize(1000, 1024, function ($constraint) {
                 $constraint->aspectRatio();
             })->save($destination . '/' . $image_name);

             $destination = public_path('/images');

             $image->move($destination, $image_name);
             $p->image =$image_name;


         }*/
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '1.' . $extension;
            $file->move('uploads/', $filename);
            $p->image = $filename;
        }
        $p->t1 = $request->input('t1');
        $p->t2 = $request->input('t2');

        $p->save();
        return redirect('/createpost');
    }

    public function viewpost()
    {
        return view('organizer.createpost');
    }

    public function viewpost1(Request $request)
    {
        $name = $request->session()->get('user');
        $value = post::where(
            [
                ['creator', '=', $name]
            ]
        )->get();
        return view('organizer.postview', compact('value'));
    }

    public function viewpost2($id)
    {
        $value = post::find($id);
        return view('organizer.postreview', compact('value'));
    }

    public function deletepost($id)
    {
        $product = post::find($id);
        $product->delete();
        return redirect('/view')->with('success', 'Post is deleted successfully!');

    }


}

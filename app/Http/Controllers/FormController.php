<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Member;

class FormController extends Controller
{
    public function process(Request $request) {
        // 1. setting validasi
        $validator = Validator::make(
            Input::all(),
            array(
                "name"       => "required|max:30",
                "nim"        => "required|min:8|max:8",
                "bio"        => "required",
                "img1"       => "required",
            )
        );

        // 2b. jika tidak, kembali ke halaman form registrasi
        if($validator->fails())
        {
            return Redirect::to('register')
                ->withErrors($validator)
                ->withInput(Input::all());
        }
        // 2a. jika semua validasi terpenuhi simpan ke database
        else
        {
            $member = new Member;
            $member->name     = Input::get('name');
            $member->nim      = Input::get('nim');
            $member->prodi    = $member->getprodi();
            $member->bio      = Input::get('bio');
            $member->save();

            $imageName = $member->nim.'-1.'.$request->file('img1')->getClientOriginalExtension();
            $request->file('img1')->move(public_path('img/profpic'), $imageName);


            return view("pages.register")
                ->with('register_success','true');
        }
    }
}

?>
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Use App\Member;
Use Illuminate\Http\Request;

Route::any('/', function () {
    return view('pages.home');
});

Route::any('/member', function () {
    return view('pages.member');
});

Route::any('/member/{name}', function ($name) {
    return view('pages.member')->with('name', $name);
});

Route::any('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/verif', function () {
	if (Input::get('id') != null) {
		$id = Input::get('id');
		$member = Member::find($id);
        if ($member->verified) { $member->verified = false; }
        else { $member->verified = true; }
        $member->save();
	}
    return view('pages.verif');
});

Route::get('/register', function () {
	$old['name'] = "";
    return view('pages.register')
    	->with('old',$old);
});

Route::post('/register', function (Request $request) {

	$cnt = Member::where('nim', Input::get('nim'))->count();
	if ($cnt == 0) {
		// 1. setting validasi
	    $validator = Validator::make(
	        Input::all(),
	        array(
	            "name"       => "required|max:30",
	            "nim"        => "required|min:8|max:8",
	            "bio"        => "required",
	            'img1'       => 'required|image|max:1024',
	            'img2'       => 'required|image|max:1024',
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
	
			$imageName = $member->nim.'-1.'.Input::file('img1')->getClientOriginalExtension();
	        $request->img1->move(public_path('img/profpic'), $imageName);
	
	        $imageName = $member->nim.'-2.'.Input::file('img2')->getClientOriginalExtension();
	        $request->img2->move(public_path('img/profpic'), $imageName);
	
	
	        return view("pages.register")
	        	->with('reg_msg','Akun berhasil dibuat. Tunggu verifikasi oleh admin supaya tampil di member page.');
	    }
	} else {
		return view("pages.register")
		->with('reg_msg','Gagal. Akun sudah ada. Kontak yonas kalau mau ngubah data.');
	}
});
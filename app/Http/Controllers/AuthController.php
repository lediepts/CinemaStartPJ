<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class AuthController extends Controller
{
    //
    public function checkLogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return 'Login success';
        }else{
            Session::flash('message', "Sai thong tin dang nhap");
            return redirect()->back()->withInput();
        }
    }
}

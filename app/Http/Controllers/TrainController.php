<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainController extends Controller
{
    //

    public function index(Request $request){

        $user = Auth::user();
        $sort = $request->sort;
        $items = Person::orderBy($sort,'asc')->simplePaginate(5);
        $param = ['items' => $items,'sort' => $sort,'user'=>$user];
        return view('hello.index',$param);
    }

    public function getAuth(Request $request){
        return view('ct-main',$param);
    }

    public function postAuth(Request $request){

        $email = $request->email;
        $password = $request->password;
        Auth::attempt(['email'=>$email,'password'=>$password]);

        return view('ct-main',['idDisp' => Auth::user()->name]);
    }

    public function logout(Request $request){

        Auth::logout();
        return redirect("countrain");
    }

}

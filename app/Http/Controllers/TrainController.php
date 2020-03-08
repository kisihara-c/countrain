<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            
            $name = Auth::user()->name;
            $item = DB::table('ctroutemaps')->where('authUser',$name)->first();
            return view('ct-main',['idDisp' => Auth::user()->name,'item'=>$item]);
        }
        else{
            
            return
            ("<html><head><title>きっぷがへんです</title></head>
            <body><p>うーん？？？　合言葉が間違っています。戻るボタンから再ログインをお願いします。</p></body></html>");
            
        }

        
    }

    public function logout(Request $request){

        Auth::logout();
        return redirect("countrain");
    }

}

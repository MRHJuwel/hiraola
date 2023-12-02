<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VisitorController extends Controller
{
    //
    public function loginRegister(){
        return view('front-end-view.visitor.login-register');
    }
    public function visitorRegister (Request $request){
        Visitor::saveInfo($request);
        return redirect(route('my.account'));
    }
    private static $visitor;
//    visitor LogIn and session start here
    public function visitorLogin (Request $request){

       self::$visitor = Visitor::where('email',$request->email)
           ->orWhere('password',$request->password)->first();
       ;
       if (self::$visitor){

           if (password_verify($request->password, self::$visitor->password))
           {
               Session::put('visitorId', self::$visitor->id);
               Session::put('visitorFname', self::$visitor->fname);
               Session::put('visitorLname', self::$visitor->lname);

               return redirect(route('my.account'));
           }
           else {
               return  back()->with('message', 'Please input valid password ');
           }
       }
       else {
           return  back()->with('message', 'Please input valid Email ');
       }
    }
//Visitor logout or Session forget
    public function visitorLogout(){
        Session::forget('visitorId');
        Session::forget('visitorFname');
        Session::forget('visitorLname');
        return redirect(route('login.register'));
    }
//    Order percess

    public function orderPercess(Request $request)
    {
        //return $request;
        Order::saveInfo($request);
        return back();
    }
}

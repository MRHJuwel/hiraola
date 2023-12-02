<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Visitor extends Model
{
    use HasFactory;
    private static $visitor;

    public static function saveInfo($request,$id=null){
        if ($id!=null)
        {
            self::$visitor = Visitor::find($id);
        }
        else {
            self::$visitor = new Visitor();
        }
        self::$visitor->fname = $request->fname;
        self::$visitor->lname = $request->lname;
        self::$visitor->phone = $request->phone;
        self::$visitor->email = $request->email;
        self::$visitor->password = Hash::make($request->password);
        self::$visitor->save();
    }
}

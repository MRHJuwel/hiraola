<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function PHPUnit\Runner\validate;

class Catagory extends Model
{
    use HasFactory;
    private static $catagory,$status;
    public static function saveInfo($request,$id=null)
    {
        $request->validate([
            'name' => 'required | string | max:100 | min:3'
        ],[
            'name.required' => 'Please add catagory name please',
            'name.string' => 'Please add catagory name as string only',
            'name.max' => 'Please add catagory name less then 100 charecter',
            'name.min' => 'Please add catagory name more then 2 charecter',
        ]);
        if ($id != null)
        {
            self::$catagory = Catagory::find($id);
        }
        else {
            self::$catagory = new  Catagory();
        }

        self::$catagory->name = $request->name;
        self::$catagory->save();
    }
    public static function showStatus ($id){

        self::$status = Catagory::find($id);
        if (self::$status->status == 1){
            self::$status->status = 0;
        }
        else {
            self::$status->status = 1;
        }
        self::$status->save();
        }

}

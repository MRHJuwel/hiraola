<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UpdateCard extends Model
{
    use HasFactory;
    private static $updatecard;
    public static function saveInfo($request, $id=null){
       if ($id != null)
       {
           self::$updatecard = UpdateCard::find($id);
       }
       else {
           self::$updatecard = new UpdateCard();
       }
        self::$updatecard->productId = $request->productId;
        self::$updatecard->image = $request->image;
        self::$updatecard->name = $request->name;
        self::$updatecard->ex_tax = $request->ex_tax;
        self::$updatecard->userId = $request->userId;
        self::$updatecard->totals = $request->totals;


        self::$updatecard->save();
    }
    public static function updateQuantity($request, $id)
    {
        if ($id !=null)
        {
            self::$updatecard = UpdateCard::find($id);
        }
        $b = self::$updatecard->quantity = $request->quantity;
        $a = self::$updatecard->totals = $request->totals;
        $c = $a * $b;
        self::$updatecard->totals = $c;


        self::$updatecard->save();
    }
        public function sums(){
            return DB::table("update_cards")->get()->sum("totals");
        }
}

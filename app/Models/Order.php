<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Order extends Model
{
    use HasFactory;
    private static $oreder, $orderItem,$product,$status;
    public static function saveInfo($request)
    {
        self::$oreder = new  Order();
        self::$oreder->userId = $request->userId;
        self::$oreder->bill = $request->bill;
        self::$oreder->address = $request->address;
        self::$oreder->fullname = $request->fullname;
        self::$oreder->phone = $request->phone;
        self::$oreder->status = 'pending';
        self::$oreder->productId = $request->productId;

        if (self::$oreder->save())
        {
            $carts = UpdateCard::where('userId',Session::get('visitorId'))->get();
            foreach ( $carts as $cart)
            {

                self::$product = Order::find($cart->userId);


                self::$orderItem = new OrderItem();
                self::$orderItem->productId = $cart->id;
                self::$orderItem->quantity = $cart->quantity;
                self::$orderItem->userId = $cart->userId;
                self::$orderItem->price = $cart->totals;
                self::$orderItem->orderId = self::$oreder->id;
                self::$orderItem->save();
                $cart->delete();

            }
        }

    }
//        Status Pending
    public  static  function makeStatus($id){
        self::$status = Order::find($id);
        if (self::$status->status == 'pending')
        {
            self::$status->status = 'Completed';
        }
        else {
            self::$status->status = 'pending';
        }
        self::$status->save();
    }
}

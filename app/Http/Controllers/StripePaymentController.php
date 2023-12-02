<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\UpdateCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;


class StripePaymentController extends Controller
{
    //
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    private static $oreder, $orderItem,$product,$status;
    public function stripe( Request $request)
    {


        $bill = $request->bill;
        $fullname = $request->fullname;
        $phone = $request->phone;
        $address = $request->address;
        $userId = $request->userId;
        $productId = $request->productId;
        return view('front-end-view.stripe.stripe',compact('bill','fullname','phone','address','userId','productId'));
    }
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => $request->bill * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "New order payment received successfully."
        ]);
        Session::flash('success', 'Payment successful!');
//         Order Table record save
       if (Session()->has('visitorId'))
       {
           self::$oreder = new  Order();
           self::$oreder->userId = $request->userId;
           self::$oreder->bill = $request->bill;
           self::$oreder->address = $request->address;
           self::$oreder->fullname = $request->fullname;
           self::$oreder->phone = $request->phone;
           self::$oreder->status = 'Paid';
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
           return  redirect('/')->with('success','Your order has been placed succesfully');
       }


        return back();
    }
}

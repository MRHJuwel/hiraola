<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catagory;
use App\Models\Contact;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\Team;
use App\Models\UpdateCard;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        return view('front-end-view.home.home',[
           'shops'=> Shop::all(),
            'neckless' => Shop::where('catagori_id',1)->get(),
            'earrings' => Shop::where('catagori_id',2)->get(),
            'bracelet' => Shop::where('catagori_id',3)->get(),
            'anklet' => Shop::where('catagori_id',3)->get(),
            'sliders' => Slider::where('status',1)->get(),

        ]);
    }
//shop page controller function here strat
    public function shop()
    {
        return view('front-end-view.shop.shop',[
            'shops' => Shop::all()
        ]);
    }
//    public function shopToCard($id)
//    {
//        return view('front-end-view.shop.card',[
//            'shops' => Shop::where('id',$id)->get(),
//            'updateCards' => UpdateCard::where('userId',\Illuminate\Support\Facades\Session::get('visitorId'))->get()
//        ]);
//    }


    public function singleProduct($id)
    {
        return view('front-end-view.shop.single-product',[
            'shops' => Shop::where('id',$id)->get()
        ]);
    }

    public function shopCompare()
    {
        return view('front-end-view.shop.compare');
    }


   public function aboutUs()
    {
        return view('front-end-view.about.about',[
            'teams' => Team::where('status',1)->orderBy('id','desc')->get()
        ]);
    }

   public function contact()
    {

        return view('front-end-view.contact.contact');
    }
   public function storContact(Request $request)
    {

        Contact::saveInfo($request);
        return back();
    }

    //shop page controller function here end
    //
    //
    // Blog page controller function here strat
    public function blog()
    {
        return view('front-end-view.blog.blog',[
            'catagories' => Catagory::where('status',1)->orderBy('id','desc')->get(),
            'blogs' => Blog::where('status',1)->orderBy('id','desc')->first()->get()
        ]);
    }
    public function blogDetails($slug)
    {
        return view('front-end-view.blog.blog-details',[
            'catagories' => Catagory::where('status',1)->orderBy('id','desc')->get(),
            'blogs' => Blog::where('slug',$slug)->get()
        ]);
    }

    // Blog page controller function end here
    //
    // My Account page controller function here strat
    public function myAccount()
    {
        return view('front-end-view.visitor.myaccount',[
            'visitors' => Visitor::where('id',Session::get('visitorId') )->first()
        ]);
    }
}

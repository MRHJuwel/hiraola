<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Logo;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard.dashboard');
    }

    public function viewContact(){
        return view('admin.dashboard.contact.contact',[
            'contacts'=> Contact::all()
        ]);
    }

    public function orderList(){
        return view('admin.order.order',[
            'orders'=> Order::all(),
        ]);
    }

    public function pendingStatus($id){
       Order::makeStatus($id);
       return back()->with('message', 'Successfully done');
    }
}

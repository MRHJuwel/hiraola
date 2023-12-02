<?php

namespace App\Http\Controllers;

use App\Models\UpdateCard;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('front-end-view.shop.card',[
            'updateCards' => UpdateCard::where('userId',\Illuminate\Support\Facades\Session::get('visitorId'))->get(),


        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UpdateCard::saveInfo($request);
        return redirect(route('cardUpdates.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //return $request;
        UpdateCard::updateQuantity($request,$id);
        return redirect(route('cardUpdates.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    private static $destroy;
    public function destroy(string $id)
    {
        // destroy card list
      self::$destroy =  UpdateCard::find($id)->delete();
      return back();

    }
}

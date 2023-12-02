<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $delete;
    public function index()
    {
        return view('admin.shop.index',
        [
            'shops' => Shop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.shop.create',[
            'catagories' => Catagory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Shop::saveInfo($request);
        return redirect(route('shops.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Shop::showStatus($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.shop.edit',[
            'shop' => Shop::find($id),
            'catagories' => Catagory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Shop::saveInfo($request,$id);
        return redirect(route('shops.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$delete = Shop::find($id)->delete();
        return back();
    }
}

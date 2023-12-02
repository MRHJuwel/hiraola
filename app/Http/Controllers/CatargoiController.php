<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Catagory;
use Illuminate\Http\Request;

class CatargoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $delete;
    public function index()
    {
        return view('admin.catagories.index',[
            'catagories' => Catagory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.catagories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Catagory::SaveInfo($request);
        return redirect(route('catagories.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Catagory::showStatus($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.catagories.edit',[
            'catagory' => Catagory::find($id),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Catagory::saveInfo($request,$id);
        return redirect(route('catagories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        self::$delete = Catagory::find($id)->delete();
        return back();

    }
}

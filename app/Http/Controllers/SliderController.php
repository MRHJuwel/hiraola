<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static $delete;
    public function index()
    {
        return view('admin.slider.index',[
            'sliders' => Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Slider::saveInfo($request);
        return redirect(route('sliders.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Slider::showStatus($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.slider.edit',[
            'slider' => Slider::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Slider::saveInfo($request,$id);
        return redirect(route('sliders.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$delete = Slider::find($id)->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.team.index',[
            'teams' => Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Team::saveInfo($request);
        return redirect(route('teams.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Team::showStatus($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view('admin.team.edit',[
           'team' => Team::find($id)
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Team::saveInfo($request,$id);
        return redirect(route('teams.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    private static $delete;
    public function destroy(string $id)
    {
        self::$delete = Team::find($id)->delete();
        return back();
    }
}

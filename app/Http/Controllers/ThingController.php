<?php

namespace App\Http\Controllers;

use App\Models\Thing;
use App\Models\User;
use Illuminate\Http\Request;

class ThingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $things = Thing::all();
        return view('things.index', compact('things'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('things.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'wrnt' => 'required',
            'master' => 'required',
        ]);

        $thing = Thing::create($request->all());

        return redirect()->route('things.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $thing = Thing::findOrFail($id);
        return view('things.show', compact('thing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $thing = Thing::findOrFail($id);
        $users = User::all();
        return view('things.edit', compact('thing', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'wrnt' => 'required',
            'master' => 'required',
        ]);

        $thing = Thing::findOrFail($id);
        $thing->update($request->all());

        return redirect()->route('things.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $thing = Thing::findOrFail($id);
        $thing->delete();
        return redirect()->route('things.index');
    }
}

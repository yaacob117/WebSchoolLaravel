<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universe;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universe = Universe::all();
        return view('universes.index', compact('universe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universes = Universe::select('id', 'name') ->get();
        return view('universes.create', compact('universes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Universe::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return to_route('universe.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $universe = Universe::find($id);
        return view('universes.show', compact('universe'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

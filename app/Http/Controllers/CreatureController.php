<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CreatureRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CreatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $creatures = Creature::paginate();

        return view('creature.index', compact('creatures'))
            ->with('i', ($request->input('page', 1) - 1) * $creatures->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $creature = new Creature();

        return view('creature.create', compact('creature'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatureRequest $request): RedirectResponse
    {
        Creature::create($request->validated());

        return Redirect::route('creatures.index')
            ->with('success', 'Creature created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $creature = Creature::find($id);

        return view('creature.show', compact('creature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $creature = Creature::find($id);

        return view('creature.edit', compact('creature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatureRequest $request, Creature $creature): RedirectResponse
    {
        $creature->update($request->validated());

        return Redirect::route('creatures.index')
            ->with('success', 'Creature updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Creature::find($id)->delete();

        return Redirect::route('creatures.index')
            ->with('success', 'Creature deleted successfully');
    }
}

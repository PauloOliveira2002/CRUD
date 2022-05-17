<?php

namespace App\Http\Controllers;

use App\Pet;
use App\Player;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::orderBy('id', 'desc')->paginate(10);

        return view('pages.pets.index', ['pets' => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::all();

        return view('pages.pets.create', ['players' => $players]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'color'         => 'required',
            'player_id'    => 'required',
        ]);

        Pet::create([
            'name'          => $request->name,
            'color'         => $request->color,
            'player_id'   => $request->player_id,
        ]);

        return redirect('pets')->with('status', 'Pet created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        return view('pages.pets.show', ['pet' => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        $players = Player::all();

        return view('pages.pets.edit', ['pet' => $pet , 'players' => $players]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $pet                 = Pet::find($pet->id);
        $pet->name           = $request->name;
        $pet->color          = $request->color;
        $pet->player_id      = $request->player_id;
        $pet->save();

        return redirect('pets')->with('status', 'Pet edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet = Pet::find($pet->id);
        $pet->delete();

        return redirect('pets')->with('status', 'Pet deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Pokemon;
use App\Ability;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $pokemons = Pokemon::all();
        return response()->json([
            'pokemons' => $pokemons
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:1|max:255',
            'type_id' => 'required|numeric',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'gender' => 'required|min:1|max:1',
            'stat_id' => 'required|numeric',
            'description' => 'min:1',
            'ability_id' => 'required|numeric',
        ]);

        $pokemon = new Pokemon();
        $pokemon->name = $request->json('name');
        $pokemon->type_id = $request->json('type_id');
        $pokemon->weight = $request->json('weight');
        $pokemon->height = $request->json('height');
        $pokemon->gender = $request->json('gender');
        $pokemon->stat_id = $request->json('stat_id');
        $pokemon->description = $request->json('description');
        $pokemon->ability_id = $request->json('ability_id');
        $pokemon->updated_at = Carbon::now();
        $pokemon->created_at = Carbon::now();
        $pokemon->saveOrFail();

        return response()->json([
            'message' => 'Registro ingresado: ' . $pokemon->name
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        return response()->json([
            'pokemon' => $pokemon
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:1|max:255',
            'type_id' => 'required|numeric',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'gender' => 'required|min:1|max:1',
            'stat_id' => 'required|numeric',
            'description' => 'min:1',
            'ability_id' => 'required|numeric',
        ]);

        $pokemon = Pokemon::findOrFail($id);
        $pokemon->name = $request->json('name');
        $pokemon->type_id = $request->json('type_id');
        $pokemon->weight = $request->json('weight');
        $pokemon->height = $request->json('height');
        $pokemon->gender = $request->json('gender');
        $pokemon->stat_id = $request->json('stat_id');
        $pokemon->description = $request->json('description');
        $pokemon->ability_id = $request->json('ability_id');
        $pokemon->updated_at = Carbon::now();
        $pokemon->update();

        return response()->json([
            'message' => 'Registro actualizado: ' . $pokemon->name
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pokemon::findOrFail($id)->delete();
        return response()->json([
            'message' => 'Registro eliminado'
        ]);
    }
}

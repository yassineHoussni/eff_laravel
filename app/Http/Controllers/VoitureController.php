<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures= Voiture::all();
        return view('voiture.index' , compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('voiture.createVoiture',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $voiture=new Voiture;
        $voiture->matricule=$request['matricule'];
        $voiture->marque=$request['marque'];
        $voiture->couleur=$request['couleur'];
        $voiture->dateMiseEnCirculation=$request['dateMiseEnCirculation'];
        $voiture->save();
        return redirect('voitures');

    }

    /**
     * Display the specified resource.
     */
    public function show(Voiture $voiture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voiture $voiture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voiture $voiture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voiture $voiture)
    {
        $voiture->delete();
        return redirect('/voitures');
    }
}

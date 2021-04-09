<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Models\Huisdier;
use Illuminate\Support\Facades\Auth;

class HuisdierController extends Controller
{
    public function show($id){
        return view('huisdier.components.huisdierinfo', [
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);
    }

    public function index(){
        return view('huisdier.huisdierGrid', [
            'huisdieren' => \App\Models\Huisdier::all(),
        ]);
    }

    public function createView(){
        return view('aanvraag.components.createaanvraag', ['soorten' => \App\Models\Soort::all()]);
    }

    public function store(Request $request){
        $eigenaar = Auth::user()->id;
        $huisdier = new Huisdier;
        $request->validate([
            'name' => 'required|string|max:255',
            'leeftijd' => 'required|integer',
            'geslacht' => 'required',
            'soort' => 'required',
            'uurtarief' => 'required',
            'afbeelding' => 'required',
            'startDatum' => 'required',
            'endDatum' => 'required',
        ]);

        $huisdier->naam = $request->name;
        $huisdier->eigenaar = $eigenaar;
        $huisdier->leeftijd = $request->leeftijd;
        $huisdier->geslacht = $request->geslacht;
        $huisdier->description = $request->omschrijving;
        $huisdier->fotolocatie = $request->fotolocatie;
        $huisdier->soort = $request->soort;
        $huisdier->uurtarief = $request->uurtarief;
        $huisdier->startDatum = $request->startDatum;
        $huisdier->endDatum = $request->endDatum;
        
        $validatedData = $request->validate([
            'afbeelding' => 'required|max:2048',
        ]);
        $path = $request->file('afbeelding')->store('public/files');
        $huisdier->fotolocatie = $path;


        $huisdier->save();
    
        return redirect('/huisdier');
    }

    public function delete($id){
        $huisdier = \App\Models\Huisdier::find($id);
        $huisdier->delete();
        return redirect('/huisdier');
    }
}

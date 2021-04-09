<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AanvraagController extends Controller
{

    public function index(){
        return view('aanvraag.aanvraagGrid');
    }

    public function store(Request $request, \App\Models\Aanvraag $aanvraag){
        $aanvraag->oppasserId = $request->input('oppasserId');
        $aanvraag->huisdierId = $request->input('huisdierId');
        $aanvraag->save();
        return redirect('/aanvragen');
    }

    public function accept(Request $request, $id){
        $aanvraag = \App\Models\Aanvraag::find($id);
        $aanvraag->acceptedByAanbieder = 1;
        $aanvraag->myPet->delete();
        $aanvraag->save();
        return redirect('/review/' . $request->oppasserId);
    }

    public function deny($id){
        $aanvraag = \App\Models\Aanvraag::find($id);
        $aanvraag->deniedByAanbieder = 1;
        $aanvraag->delete();
        $aanvraag->save();
        return redirect('/aanvragen');
    }

}

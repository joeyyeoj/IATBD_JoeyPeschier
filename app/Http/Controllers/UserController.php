<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\UserFotoTrait;

class UserController extends Controller
{
    public function show($id){
        return view('user.components.userinfo', [
            'user' => \App\Models\User::find($id),
        ]);
    }

    public function updateView(){
        return view('user.components.useredit', [
            'user' => Auth::user(),
        ]);
    }

    public function block(Request $request, $id){
        $user = \App\Models\User::find($id);
        $user->blocked = 1;
        $user->save();
        return redirect('/huisdier');
    }

    public function update(Request $request){
    

        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'leeftijd' => 'required|integer',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->leeftijd = $request->leeftijd;
        $user->omschrijving = $request->omschrijving;

        if(Auth::user()->role == "Oppasser"){
            $user->honden = $request->honden;
            $user->katten = $request->katten;
            $user->vogels = $request->vogels;
            $user->reptielen = $request->reptielen;
            $user->knaagdieren = $request->knaagdieren;
        }
        else{
            $user->honden = 0;
            $user->katten = 0;
            $user->vogels = 0;
            $user->reptielen = 0;
            $user->knaagdieren = 0;
        }
        

        $user->save();
        $user->StoreUserFoto($request);
        return redirect('/dashboard');
    }
}

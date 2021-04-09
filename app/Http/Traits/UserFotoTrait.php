<?php

namespace App\Http\Traits;
use \App\Models\UserFoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait UserFotoTrait {
    public function StoreUserFoto(Request $request) {
        $validatedData = $request->validate([
            'afbeelding' => 'required|max:2048',
           ]);
           $userid = Auth::user()->id;
           $path = $request->file('afbeelding')->store('public/files');
           $save = new UserFoto;
           $save->userId = $userid;
           $save->locatie = $path;
           $save->save();
    }

}

?>
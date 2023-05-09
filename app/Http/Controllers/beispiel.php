<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beispiel extends Controller
{
    //
    public function verarbeiten(Request $request){
        return view('ausgabe', [
            'lname' => $request['lname'],
            'fname' => $request['fname']
        ]);
    }
}

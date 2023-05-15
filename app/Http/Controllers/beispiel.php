<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class beispiel extends Controller
{
    //
    public function register(Request $request){

        $user = new User();

        $user->lname=$request['lname'];
        $user->fname=$request['fname'];
        $user->email=$request['email'];
        $user->password=$request['password'];

        $user->save();

        return view('ausgabe', [
            'lname' => $request['lname'],
            'fname' => $request['fname'],
            'method' => 'regestriert'
        ]);
    }

    public function angemeldet(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            return view('ausgabe', [
                'lname' => $request['lname'],
                'fname' => $request['fname'],
                'method' => 'angemeldet'
            ]);
        };
    }

    public function abgegeben(Request $reques){

        return view('abgegeben', [
            dd()
        ]);

    }
}

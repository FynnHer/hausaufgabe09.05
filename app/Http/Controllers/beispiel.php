<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class beispiel extends Controller
{
    //
    public function verarbeiten(Request $request){

        $user = new User();

        $user->lname=$request['lname'];
        $user->fname=$request['fname'];
        $user->email=$request['email'];
        $user->password=$request['password'];

        return view('ausgabe', [
            'lname' => $request['lname'],
            'fname' => $request['fname']
        ]);


    }
}

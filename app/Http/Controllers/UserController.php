<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:655'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3', 'max:688']
        ]);

        // $incomingFields['password'] = bcrypt ($incomingFields['password']);

        User::create($incomingFields);
        return 'success';

    }

   

}
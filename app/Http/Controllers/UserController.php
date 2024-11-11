<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function register(Request $request){
    $incomingFields = $request->validate([
        'name' => ['required', 'min:3', 'max:6'],
        'email' => ['required', 'min:3', 'max:6'],
        'password' => ['required', 'min:3', 'max:6']
    ]);

    User::create($incomingFields)

}


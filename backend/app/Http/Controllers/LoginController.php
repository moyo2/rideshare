<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function submit(Request $request)
    {
    //validate the phone number
    $request->validate([
        'phone' => 'required|numeric|min:10'
    ]);

    //find or create a user model
    if(!$user) {
        return response()->json(['message' =>'could not process a user with the provide phone number.'], 401);
    }
    //send the user a one time use code
$user->notify(new LoginNeedsVerification());

    }

}

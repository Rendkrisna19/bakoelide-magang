<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    //
}
$userData = Socialite::driver('google')->stateless()->user();

$user = User::updateOrCreate(
    ['email' => $userData->getEmail()],
    [
        'name' => $userData->getName(),
        'google_id' => $userData->getId(),
        'avatar' => $userData->getAvatar()
    ]
);

Auth::login($user);
return redirect('/dashboard');

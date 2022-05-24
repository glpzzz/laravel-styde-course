<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function greetingWithNickname($name, $nickname)
    {
        $name = ucfirst($name);
        return "Hello $name. Your nickname is $nickname.";
    }

    public function greetingWithoutNickname($name)
    {
        $name = ucfirst($name);
        return "Hello $name.";
    }
}

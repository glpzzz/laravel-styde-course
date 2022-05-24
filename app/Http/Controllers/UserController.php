<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Users';
    }

    public function new()
    {
        return "New User";
    }

    public function show($id){
        return "Details of user $id";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = request()->has('empty')
            ? []
            : [
                'Axl',
                'Slash',
                'Duff',
                'Matt',
                'Izzy',
                '<script>alert("Mojoneta")</script>',
            ];

        return view('users', [
            'users' => $users,
            'title' => 'Users',
        ]);
    }

    public function new()
    {
        return "New User";
    }

    public function show($id)
    {
        return "Details of user $id";
    }
}

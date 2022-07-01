<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Pages.users', [
            'title' => 'User Management',
            'page' => 'users'
        ]);
    }
}

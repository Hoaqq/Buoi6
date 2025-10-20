<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Lấy tất cả user và profile liên kết (Eager Loading)
        $users = User::with('myProfile')->get();
        return view('users.index', compact('users'));
    }
}

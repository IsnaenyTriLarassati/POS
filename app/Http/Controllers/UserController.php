<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index() 
    {
        $user = UserModel::with('level')->get();
        // dd($user);

        //Modifikasi 
        return view('user', ['data' => $user]);
    }
}

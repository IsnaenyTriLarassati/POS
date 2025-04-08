<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function profile($id, $name)
    // {
    //     return view('profile', compact('id', 'name'));
    // }

    public function index() 
    {
        $data = [
            // 'level_id' => 2,
            // 'username' => 'manager_dua',
            // 'nama' => 'Manager 2',
            // 'password' => Hash::make('12345')  

            //Modifikasi J-04 $fillable

            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345') 
          ];
          UserModel::create($data);
  
          $user = UserModel::all();
          return view('user', ['data' => $user]);
    }
}

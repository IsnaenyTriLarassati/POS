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
        //$data = [
            // 'level_id' => 2,
            // 'username' => 'manager_dua',
            // 'nama' => 'Manager 2',
            // 'password' => Hash::make('12345')  

            //Modifikasi J-04 $fillable

        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345') 
        //   ];
        //   UserModel::create($data);
  
        //   $user = UserModel::all();
        //   return view('user', ['data' => $user]);


        
        //--
        //Praktikum 2.1 – Retrieving Single Models -J4
        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        //Modifikasi
        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);

        //Modifikasi
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

        //Modifikasi
        // $user = UserModel::findOr(20, ['username', 'nama'], function() {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);



        //--
        //Praktikum 2.2 – Not Found Exceptions -J4
            // $user = UserModel::findOrFail(1);
            // return view('user', ['data' => $user]);
        
        // Modifikasi
            $user = UserModel::where('username', 'manager9')->findOrFail();
            return view('user', ['data' => $user]);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';    //Mendefinisika nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id';

     protected $fillable = ['level_id', 'username', 'nama', 'password'];

    //Modifikasi J-04 $fillable No 4
    //protected $fillable = ['level_id', 'username', 'nama'];
}

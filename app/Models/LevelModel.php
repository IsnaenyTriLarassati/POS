<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'm_level';

    // Primary key dari tabel
    protected $primaryKey = 'level_id';

    // Kolom-kolom yang bisa diisi (fillable)
    protected $fillable = ['level_kode', 'level_nama'];

    // Jika tabel tidak menggunakan timestamps (created_at, updated_at)
    public $timestamps = false;
}

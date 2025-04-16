<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\BarangModel;
use App\Models\UserModel;

class StokModel extends Model
{
    use HasFactory;

    protected $table = 't_stok'; // nama tabel di database
    protected $primaryKey = 'stok_id'; // primary key tabel

    // kolom yang bisa diisi (mass assignment)
    protected $fillable = ['barang_id', 'stok_jumlah', 'stok_tanggal', 'user_id'];

    /**
     * Relasi ke tabel m_barang
     */
    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }

    /**
     * Relasi ke tabel m_user
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'user_id');
    }
}
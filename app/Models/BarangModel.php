<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;

class BarangModel extends Model
{
    public function barang(): BelongsTo
    {
        return $this->belongsTo(BarangModel::class, 'kategori_id', 'kategori_id');
    }
}
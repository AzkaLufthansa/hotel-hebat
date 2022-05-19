<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Searching
    public function scopeSearching($query)
    {
        if(request('keyword')) {
            return $query->where('nama_tamu', 'like', '%' . request('keyword') . '%');
        }

        if(request('input')) {
            return $query->where('cek_in', 'like', '%' . request('input') . '%');
        }
    }
}

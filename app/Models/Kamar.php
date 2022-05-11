<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fasilitas() {
        return $this->hasMany(FasilitasKamar::class);
    }
}

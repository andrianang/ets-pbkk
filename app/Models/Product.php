<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'kecacatan',
        'images',
        'kategori',
        'kondisi',
        'jumlah',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function kondisi(){
        return $this->belongsTo(Kondisi::class);
    }
}

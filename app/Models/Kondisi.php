<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];
    public function product(){
        return $this->hasMany(Product::class);
    }
}

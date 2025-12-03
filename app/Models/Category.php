<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'name',
        'description',
    ];

    // Jika nanti mau relasi ke Product (opsional)
    // public function products()
    // {
    //     return $this->hasMany(Product::class);
    // }
}

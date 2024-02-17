<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username', 'password',
    ];

    // Relasi dengan Categories
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    // Relasi dengan Products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}


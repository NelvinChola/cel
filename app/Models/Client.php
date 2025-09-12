<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];

    // A client has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'name', 
        'description', 
        'images', 
        'client_id', 
        'category_id', 
        'project_date', 
        'project_url'
    ];

    // Cast the 'images' attribute to an array automatically
    protected $casts = [
        'images' => 'array',
        'project_date' => 'date'
    ];

    // A product belongs to a client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    // A product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
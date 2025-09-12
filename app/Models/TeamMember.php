<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'email',
        'phone',
        'bio',
        'photo',
        'order',
        'is_active',
        'social_links'
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_active' => 'boolean'
    ];

    /**
     * Scope active team members
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope ordered team members
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('name');
    }
}
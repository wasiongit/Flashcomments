<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'logo'
    ];

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship with Topics
    public function topic() {
        return $this->hasMany(Topics::class, 'category_id');
    }
}

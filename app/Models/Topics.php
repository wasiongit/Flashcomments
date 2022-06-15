<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'logo'
    ];

    //Relationship to Categories
    public function category() {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    // Relationship to Comments
    public function comments() {
        return $this->hasMany(Comments::class, 'topic_id');
    }
}
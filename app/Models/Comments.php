<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'topic_id',
        'language_id',
        'comments_num'
    ];

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function topic() {
        return $this->belongsTo(Topics::class, 'topic_id');
    }

    public function language() {
        return $this->belongsTo(Languages::class, 'language_id');
    }

    // Relationship to order
    public function order()
    {
        return $this->hasOne(Order::class, 'comments_id');
    }
}

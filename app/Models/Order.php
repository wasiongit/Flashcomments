<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'comments_id',
        'status',
        'user_id'
    ];

    public function comments()
    {
        return $this->belongsTo(Comments::class, 'comments_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}

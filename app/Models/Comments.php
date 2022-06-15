<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_id',
        'language_id',
        'content'
    ];

    public function topic() {
        return $this->belongsTo(Topics::class, 'topic_id');
    }

    public function language() {
        return $this->belongsTo(Languages::class, 'language_id');
    }
}

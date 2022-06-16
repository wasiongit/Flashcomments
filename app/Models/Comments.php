<?php

namespace App\Models;

use Database\Factories\CommentsFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return CommentsFactory::new();
    }
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

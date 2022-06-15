<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'flag_code'
    ];

    // Relationship with Comments
    public function comments() {
        return $this->hasMany(Comments::class, 'language_id');
    }

}

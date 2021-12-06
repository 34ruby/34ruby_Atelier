<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "image",
        "user_id",


    ];

    public function writer() {
        return $this->belongsTo(User::class, "user_id");
    }
}

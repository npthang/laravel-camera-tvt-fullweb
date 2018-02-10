<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable = ['title', 'content', 'language', 'type', 'link', 'image', 'created_at', 'updated_at'];

    protected $casts = [
        'image' => 'array'
    ];
}

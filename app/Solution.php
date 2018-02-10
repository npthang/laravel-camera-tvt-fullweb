<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['name', 'description', 'image', 'language', 'created_at', 'updated_at'];
}

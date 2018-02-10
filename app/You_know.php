<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class You_know extends Model
{
    protected $fillable = ['title', 'content', 'language' , 'created_at', 'updated_at'];

    protected $table = 'you-knows';
}

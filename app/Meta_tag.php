<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta_tag extends Model
{
    protected $fillable = ['title', 'keyword', 'app', 'description','og_description', 'post_id', 'og_title', 'created_at', 'updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    protected $fillable = ['appID', 'language', 'appName', 'trans_id', 'created_at', 'updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriable extends Model
{
	protected $fillable = ['categories_id', 'categoriable_id', 'categoriable_type', 'created_at', 'updated_at'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_type extends Model
{
	protected $fillable = ['name', 'language', 'slug', 'sortable', 'created_at', 'updated_at'];

	public function categories()
    {
        return $this->hasMany('App\Category','category_types_id','id');
    }
}

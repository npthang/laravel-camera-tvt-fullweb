<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'language', 'category_types_id', 'slug', 'sortable', 'parent_id', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function category_type()
    {

        return $this->belongsTo('App\Category_type','category_types_id');

    }

    public function categories()
    {

        return $this->hasMany('App\Category', 'parent_id', 'id');

    }


}

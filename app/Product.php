<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name', 'image', 'description', 'price', 'quantity', 'status', 'category_id', 'kind', 'language', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value, '-');
    }
}

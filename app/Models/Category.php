<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'visibility', 'image', 'alias', 'visibilityOnMainPage'];

    public $timestamps = false;

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function getRouteKeyName()
    {
        return 'alias';
    }
}

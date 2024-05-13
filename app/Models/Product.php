<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category',
        'category_id',
        'height',
        'width',
        'material',
        'material_id',
        'length',
        'description',
        'image',
        'constrictive',
        'roof',
        'processing',
        'price',
        'visibility',
        'alias',
        'isPopulate',
        'isBenefit',
        'oldPrice',
        'order'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'material_product');
    }
    public function getRouteKeyName()
    {
        return 'alias';
    }
}

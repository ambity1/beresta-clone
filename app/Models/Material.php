<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'image'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'material_product');
    }
}

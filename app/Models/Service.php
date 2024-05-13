<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'alias', 'description', 'icon', 'image_background',
        ];

    public function getRouteKeyName()
    {
        return 'alias';
    }
}

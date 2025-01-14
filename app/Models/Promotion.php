<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'link',
        'alias',
    ];

    public function getRouteKeyName()
    {
        return 'alias';
    }

}

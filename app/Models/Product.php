<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection='product';

    public function info()
    {
        return $this->hasMany(Info::class);
    }
}

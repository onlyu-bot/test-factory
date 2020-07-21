<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $connection='info';

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

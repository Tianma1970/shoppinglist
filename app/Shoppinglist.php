<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppinglist extends Model
{
    protected $fillable = [
        'title'
    ];

    public function shoppingitems()
    {
        return $this->hasMany(Shoppingitem::class);
    }
}

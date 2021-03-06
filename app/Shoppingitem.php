<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoppingitem extends Model
{
    protected $fillable = [
        'shoppinglist_id',
        'name',
        'quantity',
        'category'
    ];

    public function shoppinglist()
    {
        return $this->belongsTo(Shoppinglist::class);
    }
}

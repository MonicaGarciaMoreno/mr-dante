<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image'
    ];

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'sale_price',
        'is_featured',
        'pet_type',
        'category_id',
        'image'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'is_featured' => 'boolean',
    ];

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}

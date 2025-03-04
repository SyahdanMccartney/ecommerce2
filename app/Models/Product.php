<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['categories',
            'brand_id',
            'name',
            'slug',
            'images',
            'category_id',
            'description',
            'price',
            'is_active',
            'is_featured',
            'in_stock',
            'on_sale',
        ];

        protected $casts = [
            'images' => 'array',
        ];
public function categories(){
    return $this->BelongsTo(Category::class);
}
}



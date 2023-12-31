<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'code',
        'name',
        'brand',
        'purchase_price',
        'discount',
        'selling_price',
        'stock',
    ];
    protected $with = ['category'];
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

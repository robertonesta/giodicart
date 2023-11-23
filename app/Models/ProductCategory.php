<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_category';

    public function product() {
        return $this->hasMany(Product::class);
    }

    public function category() {
        return $this->hasMany(Category::class);
    }
}

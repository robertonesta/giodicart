<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'price', 'img', 'description'];

    public static function generateSlug($name) {
        return Str::slug($name, '-');
    }

    public function categories() : BelongsToMany {
        return $this->belongsToMany(Category::class);
    }
    
}

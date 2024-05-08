<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'time_start',
        'time_end',
        'cleaner_start',
        'cleaner_end',
        'little_description',
        'description',
        'price',
        'image',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/products/' . $this->image);
        } else {
            return asset('default-product.jpg');
        }
    }
}

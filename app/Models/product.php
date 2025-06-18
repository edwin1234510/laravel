<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        // 'image_id',
    ];
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}

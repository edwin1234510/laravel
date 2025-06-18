<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}

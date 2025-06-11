<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    /** @use HasFactory<\Database\Factories\ImagesFactory> */
    use HasFactory;

    protected $fillable = [
        'path'
    ];
    public function image()
    {
        return $this->belongsTo(product::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable')
            ->ofMany('order', 'min');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}

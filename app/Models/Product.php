<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    //Relacion Ternaria
    public function user()
    {
        return $this->belongsTo("User");
    }

    public function write()
    {
        return $this->belongsTo("Write");
    }
}

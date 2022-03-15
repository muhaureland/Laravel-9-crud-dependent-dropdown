<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    // public function categories()
    // {
    //     return $this->hasMany(Category::class);
    // }
    
}

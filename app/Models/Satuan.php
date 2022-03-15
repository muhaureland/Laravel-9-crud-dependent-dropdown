<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
    use HasFactory, Sluggable;
    
    protected $fillable = ['nama', 'slug','category_id', 'course_id', 'jumlah'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }

    protected $fillable= [
        'title',
        'description',
        'url',
        'slug',
        'category_id',
        'technology'
    ];
}

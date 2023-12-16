<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trait\CourseSluggable;
use App\Models\Category;

class Product extends Model
{
    use HasFactory, CourseSluggable;

    public $guarded = [] ;

    protected $casts = [
        'image' => 'array',
    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }
}

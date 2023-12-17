<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trait\CourseSluggable;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

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


    protected function updatedAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }
    protected function createdAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }
}

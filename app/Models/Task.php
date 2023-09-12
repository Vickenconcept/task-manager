<?php

namespace App\Models;

use App\Models\Scopes\DataAccessScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Task extends Model
{
    use HasFactory;
    

    public $guarded = [];

    // public function user()
    // {

    //     return $this->belongsTo(User::class);
    // }

    public function user()
    {

        return $this->belongsTo(Project::class);
    }


    protected function createdAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::get(fn ($value) => Carbon::parse($value)->format('F j, Y, g:i A'));
    }


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DataAccessScope);
    }
}

<?php

namespace App\Models;

use App\Models\Scopes\DataAccessScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Task;

class Project extends Model
{
    use HasFactory;


    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function tasks() {
        
        return $this->hasMany(Task::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new DataAccessScope);
    }
}

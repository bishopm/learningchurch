<?php

namespace Bishopm\Learningchurch\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    public $table = 'persons';
    protected $guarded = ['id'];
    public $timestamps = false;

    protected $casts = [
        'role' => 'array',
    ];

    public function getFullNameAttribute()
    {
        return $this->firstname . ' ' . $this->surname;
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}

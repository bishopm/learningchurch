<?php

namespace Bishopm\Learningchurch\Models;

use Bishopm\Learningchurch\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use Taggable;
    
    public $table = 'posts';
    protected $guarded = ['id'];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}

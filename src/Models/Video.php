<?php

namespace Bishopm\Learningchurch\Models;

use Bishopm\Learningchurch\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use Taggable;
    
    public $table = 'videos';
    protected $guarded = ['id'];

}

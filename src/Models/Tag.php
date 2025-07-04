<?php

namespace Bishopm\Learningchurch\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table = 'tags';
    protected $guarded = ['id'];
    public $timestamps = false;

    public static function unslug($slug){
        return ucwords(str_replace('-', ' ', $slug));
    }
}

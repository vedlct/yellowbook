<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    public $table = 'posts';
    public $timestamps = false;
    public $primaryKey = 'postId';
}

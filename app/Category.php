<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = 'category';
    public $timestamps = false;
    public $primaryKey = 'categoryId';
}

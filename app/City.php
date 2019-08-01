<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    public $table = 'city';
    public $timestamps = false;
    public $primaryKey = 'cityId';
}

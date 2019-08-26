<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    //
    public $table = 'us_states';
    public $timestamps = false;
    public $primaryKey = 'ID';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $table = 'company';
    public $timestamps = false;
    public $primaryKey = 'companyId';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
  protected $fillable = [
    'blog_title',
    'blog_name',
      'blog_price'

  ];
}

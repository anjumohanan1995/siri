<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Innovation extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
      
    protected $collection = 'innovations';  
    protected $fillable = [
        'title','slug', 'sub_title', 'content','status','image','banner_image'
    ];
  
}

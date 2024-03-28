<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Innovation extends Model
{
    use HasFactory;

    protected $collection = 'innovations';  
    protected $fillable = [
        'title','slug', 'sub_title', 'content','status','image','banner_image'
    ];
  
}

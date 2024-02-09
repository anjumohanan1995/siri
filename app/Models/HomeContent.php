<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class HomeContent extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        'blog_title',
        'blog_sub_title',
        'blog_content',
        'brand_title',
        'brand_sub_title',
        'brand_content',
        'created_by'
        // Add other fillable attributes here if needed
    ];

}

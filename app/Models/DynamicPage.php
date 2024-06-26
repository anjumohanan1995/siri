<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class DynamicPage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'menu_id',
        'slug',
        'heading',
        'title_one',
        'content_one',
        'image_one',
        'title_two',
        'content_two',
        'image_two',
        'title_three',
        'content_three',
        'image_three',
        'content_image',
        'created_by'
        // Add other fillable attributes here if needed
    ];

}

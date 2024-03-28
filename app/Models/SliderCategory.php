<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderCategory extends Model
{
    use SoftDeletes;

    protected $collection = 'slider_categories';

    protected $fillable = [
        'category_name', 'category_position', 'category_status',
    ];

    
}

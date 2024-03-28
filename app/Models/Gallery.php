<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $collection = 'gallery';

    protected $fillable = [
        'slider_category_id',
        'name',
        'status',
        'image'
    ];
}

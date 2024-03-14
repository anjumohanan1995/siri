<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class PanelThreeContent extends Eloquent
{
    use SoftDeletes;

    protected $fillable = [
        'panel_id',
        'title',
        'content',
    ];

}

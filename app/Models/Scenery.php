<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scenery extends Model
{
    protected $table = 'api_sceneries';
    
    protected $fillable = [
        'id',
        'model_id',
        'type_id',
        'accessibility_type_id',
        'name',
        'uppert_price',
        'coco_price',
        'max_visitors',
        'map_area',
        'respawn_positions',
        'active',
    ];
}

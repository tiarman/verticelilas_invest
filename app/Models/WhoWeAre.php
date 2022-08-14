<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoWeAre extends Model
{
    use HasFactory;

    protected $table='who_we_ares';

    protected $fillable = [
        'sub_title_en',
        'description_en',
        'image_en',
        'sub_title_bn',
        'description_bn',
        'image_bn',
    ];
}

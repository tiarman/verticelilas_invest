<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $table = 'partners';
    protected $fillable = [
      'name',
      'image',
      'biography',
      'life_sketch',
      'qualifications',
      'status',
    ];

    public static $statusArray = ['active', 'inactive'];
}

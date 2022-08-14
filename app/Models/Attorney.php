<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attorney extends Model
{
    use HasFactory;
    protected $table = 'attorney';
    protected $fillable = [
      'image',
      'title',
      'designation',
      'link1',
      'link2',
      'link3',
      'link4',
      'status',
    ];

    public static $statusArray = ['active', 'inactive'];
}

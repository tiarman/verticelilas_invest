<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;

    protected $table = 'practices';
    protected $fillable = [
      'image',
      'title',
      'description',
      'status',
    ];


  public static $statusArray = ['active','inactive'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $fillable = [
      'name',
      'designation',
      'description',
      'image',
      'type',
      'status',
    ];

    public static $typeArray = ['associates','staff'];
    public static $statusArray = ['active','inactive'];
}

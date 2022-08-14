<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Accordian extends Model
{
    use HasFactory;
    protected $table = 'accordian';
    protected $fillable = [
      'partner_id',
      'title',
      'description',
        'status',
    ];

    public static $statusArray = ['active', 'inactive'];
}

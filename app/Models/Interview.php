<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $table = 'interview';
    protected $fillable = [
        'partner_id',
        'type',
        'link',
        'status',
    ];
    public static $typeArray = ['audio','video'];
    public static $statusArray = ['active','inactive'];

}

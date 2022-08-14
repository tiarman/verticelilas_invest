<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table= 'publications';

    protected $fillable =[
        'partner_id', 
        'name',
        'image',
        'link',
        'file', 
        'status'
    ];
    public static $statusArray = ['active', 'inactive'];
}

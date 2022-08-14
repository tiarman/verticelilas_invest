<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Clients extends Model
{
    use HasFactory;
    protected $table = 'clients_says';
    protected $fillable = [
      'image',
      'title',
      'description',
      'designation',
      'status',
    ];

    public static $statusArray = ['active', 'inactive'];
}

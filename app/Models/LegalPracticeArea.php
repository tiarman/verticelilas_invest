<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalPracticeArea extends Model
{
    use HasFactory;
    protected $table='legal_practice_areas';

    protected $fillable = [
        'title',
        'description',
        'status'
    ];
    public static $statusArray = ['active', 'inactive'];
}

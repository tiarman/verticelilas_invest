<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalMembership extends Model
{
    use HasFactory;
    protected $table = 'professional_memberships';

    protected $fillable = [
        'partner_id',
        'title',
        'short_description',
        'link',
        'status',
      ];

      public static $statusArray = ['active', 'inactive'];
}

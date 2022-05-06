<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
   protected $fillable=[  
          'user_id',
        'status',
        'user_id',
        'borrowed_date',
        'return_date'
        ];
}


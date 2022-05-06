<?php

namespace App\Models;

use App\Models\book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class book extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'status',
        'user_id',
        'borrowed_date',
        'return_date'
    ];
}

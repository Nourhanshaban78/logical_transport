<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'type',
        'city',
        'size',
        'delivery',
        'message',
        'user_id',
        'status',
    ];
}

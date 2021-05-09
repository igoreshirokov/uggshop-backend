<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'order',
        'totalprice',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

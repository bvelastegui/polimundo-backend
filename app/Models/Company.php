<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'support_email',
        'support_phone',
        'foundation_date',
        'price'
    ];

    protected $casts = [
        'foundation_date' => 'date'
    ];
}

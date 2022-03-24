<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'address',
        'email',
        'phone_number',
        'birth_date',
        'hiring_date',
        'salary',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'hiring_date' => 'date',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

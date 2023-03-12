<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';
    protected $fillable = [
        'name',
        'email',
        'address'
    ];

    use HasFactory;
}

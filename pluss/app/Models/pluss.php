<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pluss extends Model
{
    use HasFactory;
    protected $table = 'plusses';

    protected $visible = [
        'id',
        'name',
    ];

    protected $fillable = [
        'name',
    ];
}

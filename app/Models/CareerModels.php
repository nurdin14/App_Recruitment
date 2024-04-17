<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerModels extends Model
{
    use HasFactory;

    protected $tables = 'career_models';
    protected $fillable = [
        'id',
        'position',
        'desc',
        'preq',
        'foto'
    ];
}

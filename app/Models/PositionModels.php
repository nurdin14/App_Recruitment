<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionModels extends Model
{
    use HasFactory;

    protected $table = 'position_models';
    protected $fillable = [
        'id',
        'kode',
        'position',
        'desc',
    ];
}

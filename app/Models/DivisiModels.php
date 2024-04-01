<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisiModels extends Model
{
    use HasFactory;
    protected $table = 'divisi_models';
    protected $fillable = [
        'id',
        'kode',
        'divisi',
        'desc',
    ];
}

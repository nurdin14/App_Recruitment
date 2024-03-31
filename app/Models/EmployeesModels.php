<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModels extends Model
{
    use HasFactory;
    protected $table = 'employees_models';

    protected $fillable = [
        'id',
        'name',
        'email',
        'telp',
        'divisi',
        'position',
        'address',
    ];
}

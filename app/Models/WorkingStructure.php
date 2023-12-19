<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingStructure extends Model
{
    use HasFactory;

    protected $table = 'working_structures';

    protected $fillable = [
        'title',
        'description'
    ];
}

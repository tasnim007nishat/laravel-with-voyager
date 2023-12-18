<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class HomeSlider extends Model
{
    protected $table = 'home_sliders';

    protected $fillable = [
        'title',
        'image',
        'status',
        'created_at'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    // use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'author_id',
        'title',
        'body',
        'image',
        'meta_description',
        'slug',
        'status',
        'created_at'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getShortDescription()
    {
        return substr($this->attributes['meta_description'], 0, 100);
    }
}

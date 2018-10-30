<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps  = false;
    protected $fillable = [
        'title', 'rubric', 'content', 'contents',
        'position', 'start_at', 'pictures',
        'slug',
    ];

}

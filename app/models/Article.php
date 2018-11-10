<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps  = true;

    protected $fillable = [
        'title', 'rubric', 'content', 'contents',
        'position', 'pictures',
        'slug',
    ];

}

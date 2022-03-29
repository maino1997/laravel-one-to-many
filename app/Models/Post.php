<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    protected $fillable = [
        'title',
        'image',
        'content',
        'category_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'title',
        'image',
        'content',
        'category_id'
    ];
    public function getFormattedDate($date, $format = 'd-m-Y H:i:s')
    {
        return Carbon::create($this->$date)->format($format);
    }
}

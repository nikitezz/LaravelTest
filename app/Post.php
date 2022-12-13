<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
//    protected $attributes = [
//      'content' => 'Статья модели',
//    ];
    //

    protected $fillable = ['title', 'content'];

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = Str::title($value);
    }
    public function getTitleAttribute($value){
        return Str::upper($value);
    }
}

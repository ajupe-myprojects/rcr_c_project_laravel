<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['title', 'author', 'description', 'isbn', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

}

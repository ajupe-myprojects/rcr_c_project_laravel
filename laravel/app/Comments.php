<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['title', 'content', 'user_id', 'book_id'];

    public function user()
    {
        return $this->belongsTo('App\Books');
    }
    public function book()
    {
        return $this->belongsTo('App\User');
    }
}

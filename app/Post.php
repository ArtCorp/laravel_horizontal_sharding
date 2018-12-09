<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mysql';

    protected $fillable = ['title','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

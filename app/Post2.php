<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post2 extends Model
{
    protected $connection = 'mysql_external';
    protected $fillable = ['title'];
    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

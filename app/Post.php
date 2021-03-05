<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $fillable = [
        'title', 'body'
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public $casts = [
        'created_at' => 'datetime',
    ];
}



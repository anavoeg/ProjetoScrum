<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    //
    protected $fillable = [
        'nome',
        'email',
        'type',
        'notice_id'
    ];
}

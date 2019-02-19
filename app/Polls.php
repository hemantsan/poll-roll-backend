<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polls extends Model
{
    protected $fillable = [
        'question', 'created_by'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lexis extends Model
{
    protected $fillable = [
        'spelling', 'part_of_speech', 'pronunciation', 'meaning'
    ];


}

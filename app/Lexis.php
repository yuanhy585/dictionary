<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lexis extends Model
{
    protected $fillable = [
        'spelling', 'part_of_speech', 'pronunciation', 'meaning'
    ];

//    单词和用户多对一
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }

}

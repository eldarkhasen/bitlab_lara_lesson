<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable= [
        'title',
        'user_id',
        'content',
        'best_answer_id'
    ];


    public function answers(){
        return $this->hasMany(Answer::class,'question_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $primaryKey = null;
    public $incrementing = false;
    protected $table = 'answer_question';
    protected $fillable = [
        'user_id', 'question_id', 'answer_id'
    ];
    public $timestamps = false;
}

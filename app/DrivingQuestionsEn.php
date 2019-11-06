<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrivingQuestionsEn extends Model
{
    //
    protected $table = 'driving_questions_en';

    protected $fillable = [
        'type',
        'question',
        'qid',
        'answer',
        'item1',
        'item2',
        'item3',
        'item4',
        'explains',
        'url'
    ];
}

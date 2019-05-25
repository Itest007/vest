<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrivingQuestions extends Model
{
    //

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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RateRecord extends Model
{
    //
    protected $fillable = [
        'type',
        'subtype',
        'rate',
        'record_date',
        'hour'
    ];
    public $timestamps = true;
}

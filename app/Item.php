<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected  $fillable = ['app_id','channel_id','os','status','link'];
}

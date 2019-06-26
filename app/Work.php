<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Work extends Eloquent
{
    protected $collection = 'work';

    protected $fillable = [
        'user_id',
        'year',
        'month',
        'day',
        'start_at',
        'end_at',
    ];
}

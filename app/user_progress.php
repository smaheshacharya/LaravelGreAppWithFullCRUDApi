<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_progress extends Model
{
    protected $table = 'user_progresses';
    
    public $primaryKey = 'id';

    public $timestamp = true;
}

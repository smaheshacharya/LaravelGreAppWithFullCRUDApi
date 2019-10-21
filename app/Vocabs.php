<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabs extends Model
{
    protected $table = 'vocabs';
    
    public $primaryKey = 'id';

    public $timestamp = true;

    public function user()
    {
        return $this->hasMany('App\User');
    }
}

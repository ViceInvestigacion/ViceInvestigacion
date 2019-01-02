<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messageBE extends Model
{
    protected $table = 'is_message';
    public $timestamps = false;
    protected $fillable = ['name','email','message'];
}

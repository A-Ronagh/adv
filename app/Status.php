<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['id', 'is_active',];
    protected $hidden = ['id',];
}

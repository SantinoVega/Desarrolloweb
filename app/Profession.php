<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public $timestamps=false;

    protected $fillable=['profession'];
}

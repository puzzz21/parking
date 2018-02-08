<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'address', 'number','description'];

}

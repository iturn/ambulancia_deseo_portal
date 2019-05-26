<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whish extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description'
    ];
}

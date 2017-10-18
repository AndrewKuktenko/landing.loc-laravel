<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['price', 'description', 'name'];

    public $timestamps = false;

}

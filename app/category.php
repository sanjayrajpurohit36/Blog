<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['category'];


    public function blogs() {

    	return $this->hasMany(blog::class);
    }
}

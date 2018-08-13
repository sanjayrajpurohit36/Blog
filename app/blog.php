<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['blog_id','title','user_id'];


    public function category() {

    	return $this->belongsTo(category::class);
    }

    public function user() {
    	return $this->belongsTo(User::class);
    }
}

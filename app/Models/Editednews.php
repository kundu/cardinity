<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editednews extends Model
{
    protected $guarded = ['id'];

    public function paper(){
        return $this->belongsTo('App\Models\Paper');
    }


    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}

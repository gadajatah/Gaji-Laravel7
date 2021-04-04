<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['jabatan'];
    // protected $guarded = [];


    public function workers()
    {
        return $this->hasMany(Worker::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}

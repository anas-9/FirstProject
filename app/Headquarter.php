<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $table='headquarters';

    protected $primaryKey='id';

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}

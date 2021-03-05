<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table='car_models';

    protected $primaryKey='id';

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}

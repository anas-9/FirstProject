<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table='cars';

    protected $primaryKey='id';

     protected $fillable=['name','founded','description','image_path'];

    // protected $visible=['name','founded','description'];

     public function carModel()
     {
         return $this->hasMany(CarModel::class);
     }

     public function headquarter()
     {
         return $this->hasOne(Headquarter::class);
     }

     public function engines()
{
    return $this->hasManyThrough(Engine::class,CarModel::class,'car_id','model_id');
}
public function carProductionDate()
{
    return $this->hasOneThrough(CarProductionDate::class,CarModel::class,'car_id','model_id');
}

public function products()
{
    return $this->belongsToMany(Product::class);
}
}

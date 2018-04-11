<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $table = 'trucks';
    public function getAll(){
        $allTrucks = $this->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return $allTrucks;
    }
}

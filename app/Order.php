<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function getAll(){
        $helper = new Helper\Helper();
        $allOrders = $this->orderBy('id', 'desc')
            ->take(10)
            ->get();
        foreach ($allOrders as $key => $value){
            $allOrders[$key]->date = $helper::checkDate($allOrders[$key]->date);
        }

        return $allOrders;
    }
}

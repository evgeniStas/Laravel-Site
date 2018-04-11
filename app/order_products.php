<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_products extends Model
{
    protected $table = 'order_products';
    protected $fillable = ['order', 'product', 'count', 'created_at', 'updated_at'];
    public function getAll(){
        $allOrderProducts = $this->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return $allOrderProducts;
    }

    public function checkIfExists($id){
        $yesNo = $this->where('id',$id)->get();
        return $yesNo;
    }
}

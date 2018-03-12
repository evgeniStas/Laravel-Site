<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    public function getAll($category){
        $allProducts = $this->where(
            [
                ['category', '=', $category],
                ['seller', '=', Auth::id()],
            ])
            ->orderBy('id', 'desc')
            ->get();

        return $allProducts;
    }
}

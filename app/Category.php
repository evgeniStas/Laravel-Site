<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public function getAll(){
        $allCategoryes = $this->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return $allCategoryes;
    }
}

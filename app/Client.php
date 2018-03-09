<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    public function getAll(){
        $allClients = $this->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return $allClients;
    }
}

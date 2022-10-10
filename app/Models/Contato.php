<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista(){
        return (object) [
          'nome' => 'Jhonatan',
          'tel' => '11975357987',
          'email' => 'Jhonatan@email.com',
        ];
    }
}

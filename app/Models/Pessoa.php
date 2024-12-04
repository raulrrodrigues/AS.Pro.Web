<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pessoa extends Model
{
    public function carros()
    {
        return $this->hasMany(Carro::class);
    }

    protected $fillable = ['nome', 'idade'];


}

<?php

namespace App;
use App\Barang;

use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    protected $fillable=['categori'];

    public function barang()
    {
        return $this->hasMany('App\Barang');
    }
}

<?php

namespace App;
use APp\Barang;

use Illuminate\Database\Eloquent\Model;

class Satuan extends Model
{
 protected $fillable=['satuan'];

 public function barang()
    {
        return $this->hasMany('App\Barang');
    }
}

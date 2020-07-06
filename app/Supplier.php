<?php

namespace App;
use App\Barang;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
    'nama','alamat','email','telp'];

    public function barang()
    {
        return $this->hasMany('App\Barang');
    }
}

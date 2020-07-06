<?php

namespace App;
use App\Satuan;
use App\Supplier;
use App\Categori;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
 protected $fillable= ['nama_barang', 'kode_barang', 'qty', 'satuan', 'id_suplier', 'categori'];


 public function satuan()
    {
        return $this->belongsTo('App\Satuan');
    }

public function suplier()
    {
        return $this->belongsTo('App\Sapllier');
    }

public function categori()
    {
        return $this->belongsTo('App\Categori');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function(Blueprint $table)
        {
        $table->increments('id_barang');
        $table->string('nama_barang');
        $table->string('kode_barang');
        $table->string('qty');
        $table->string('satuan');
        $table->string('id_suplier');
        $table->string('categori');
        $table->date('tanggal_masuk');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('barangs');

    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElektronikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elektronik', function (Blueprint $table) {
            $table->id();
            $table->string('nama_brg', 50);
            $table->string('harga_brg', 50);
            $table->string('merk_brg', 50);
            $table->string('tipe_brg', 50);
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
        Schema::dropIfExists('elektronik');
    }
}

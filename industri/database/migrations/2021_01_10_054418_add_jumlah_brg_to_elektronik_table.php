<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJumlahBrgToElektronikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('elektronik', function (Blueprint $table) {
            $table->string('jumlah_brg', 100)->after('tipe_brg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('elektronik', function (Blueprint $table) {
            $table->dropColumn('jumlah_brg');
        });
    }
}

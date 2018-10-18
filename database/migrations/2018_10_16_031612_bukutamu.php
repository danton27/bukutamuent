<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bukutamu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientbook', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama','50');
            $table->string('nrp','10');
            $table->string('nohp','12');
            $table->string('email','255');
            $table->string('keterangan','255');
            $table->string('petugas','50');
            $table->string('proses','50');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientbook');
    }
}
